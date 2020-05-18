<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Media;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
  private $_localpath;
  public function __construct(){
    $this->_localpath = env('APP_URL');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request, $id = null)
  {
    if( is_null($id) || $id == 0) $id = $request->productId;

    if (request()->hasFile('file')) {
      $image = request()->file('file');
      $name = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('Uploads/Products/');
      $image->move($destinationPath, $name);
      try{
        $save = Media::create(
          [
            'product_id' => $id,
            'name' => $image->getClientOriginalName(),
            'src' =>  'Uploads/Products/'.$name,
            'type' => 'image'
          ]
        );
      }catch (QueryException $e){
        return response()->json([
          'success' => 'false',
          'code' => 1001,
          'errors'  => $e->getMessage(),
        ], 404);
      }
      return response()->json($save);

    }else{
      return response()->json([
        'success' => 'false',
        'code' => 4001,
        'errors'  => 'Please upload image (backend)',
      ], 404);

    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id, $type)
  {
    try{
      if($type === 'product'){
        $image = Media::where('product_id',$id)->get(['id','name', 'src']);
      }else if ( $type === 'category'){
        $image = Media::where('category_id',$id)->get(['id','name', 'src']);
      }else{
        $image = Media::where('content_id',$id)->get(['id','name', 'src']);
      }

    }catch (QueryException $e){
      return response()->json([
        'success' => 'false',
        'errors' => $e->getMessage(),
      ], 400);
    }
    return response()->json($image);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int                      $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove image
   * @param Request $request - You should send id image
   * @param null    $id - Id image optional
   * @return \Illuminate\Http\JsonResponse
   */
  public function destroy(Request $request, $id = null)
  {
    if(is_null($request->id)){
      return response()->json([
        'success' => false,
        'code' => 2002,
        'error' => 'Bad request. The server need a blog id to destroy image.'
      ], 404);
    }
    $imagePath = public_path($request->src);
    if(File::exists($imagePath)){
      try{
        $image = Media::find($request->id);
        $image->delete();

      }catch (QueryException $e){
        return response()->json([
          'success' => false,
          'code' => 1001,
          'error' => $e->getMessage()
        ], 500);
      }
      File::delete($imagePath);

    }else{
      try{
        $image = Media::find($request->id);
        $image->delete();

      }catch (QueryException $e){
        return response()->json([
          'success' => false,
          'code' => 1001,
          'error' => $e->getMessage()
        ], 500);
      }
      return response()->json([
        'success' => true,
        'message' => "File only detroy in database in do't server"
      ]);

    }

    return response()->json([
      'success' => true,
      'message' => 'Your image was remove'
    ]);
  }

  /**
   * Save into local serve  image
   */
  protected function storeImage(){
    if (request()->hasFile('file')) {
      $image = request()->file('file');
      $name = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/Uploads/Products/content/');
      $image->move($destinationPath, $name);

      return response()->json([
        'location' =>  $this->_localpath.'/Uploads/Products/content/'.$name
      ]);

    }else{
      return response()->json([
        'success' => 'false',
        'code' => 4001,
        'errors'  => 'Please upload image (backend)',
      ], 404);

    }
  }
}
