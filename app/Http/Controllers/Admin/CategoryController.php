<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::orderBy('updated_at', 'DESC')->get();

    return view('admin.category.index', [
      'categories' => $categories
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = Category::where('category_id', null)->get();

    return view('admin.category.create',[
      'categories'=> $categories
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    try{
      $category = Category::create([
        'category_id' => $request->selParent,
        'name' => $request->name
      ]);
      return response()->json('Your category was created');
    }catch (\Exception $e){
      return response()->json([
        'success' => false,
        'code' => 1001,
        'error' => $e->getMessage()
      ], 500);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
//    Get parents category with exception actual id
    $categories = Category::where([
      ['category_id', '=', null],
      ['id', '!=', $id]
    ])->get();
    $category = Category::find($id);

    return view('admin.category.show', [
      'category' => $category,
      'categories' => $categories
    ]);
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
    try{
      $category = Category::find($id);
      $category->update([
        'category_id' => $request->selParent,
        'name' => $request->name
      ]);
      return response()->json('Your category was update');
    }catch (\Exception $e){
      return response()->json([
        'success' => false,
        'code' => 1001,
        'error' => $e->getMessage()
      ], 500);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    try{
      $category = Category::find($id);
      $category->delete();
    }catch (QueryException $e){
      return response()->json([
        'success' => false,
        'code' => 1001,
        'error' => $e->getMessage()
      ], 500);
    }

    return redirect()->route('admin.category.index')->with('status', 'Your category was deleted');
  }
}
