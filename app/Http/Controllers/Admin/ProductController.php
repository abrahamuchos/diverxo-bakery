<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\Category;
use App\Helpers\Miscellaneous;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  private $_categories, $_sizeUnits, $_weightUnits, $_volumeUnits;
  public function __construct()
  {
    $this->middleware('auth');
    $this->_categories = Category::whereNull('category_id')->with('children')->get();
    $this->_sizeUnits = Attribute::where('attribute_id', 4)->get();
    $this->_weightUnits = Attribute::where('attribute_id', 8)->get();
    $this->_volumeUnits = Attribute::where('attribute_id', 13)->get();
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $products= Product::with('category')->get();

    return view('admin.product.index', [
      'products' => $products
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.product.create',[
      'categories'=> $this->_categories,
      'sizeUnits'=> $this->_sizeUnits,
      'weightUnits'=> $this->_weightUnits,
      'volumeUnits'=> $this->_volumeUnits,
    ]);
  }

  /**
   * Store a new product
   * @param ProductRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(ProductRequest $request)
  {
    try{
      Product::create([
        'category_id' =>  $request->category,
        'name' => $request->name,
        'slug' => Miscellaneous::slugify($request->name),
        'brand' => $request->brand,
        'sku' =>  $request->sku,
        'old_price' => $request->oldPrice,
        'price' => $request->price,
        'is_active' => true,
        'pre_description' => $request->preDescription,
        'description' => $request->description,
        'stock' => $request->stock,
        'size' => $request->size,
        'size_unit_id' => $request->sizeUnit,
        'volume' => $request->volume,
        'volume_unit_id' => $request->volumeUnit ,
        'weight' => $request->weight,
        'weight_unit_id' => $request->weightUnit,

      ]);
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
    $product = Product::where('id',$id)->with('category', 'medias')->first();

    return view('admin.product.show',[
      'product' => $product,
      'categories'=> $this->_categories,
      'sizeUnits'=> $this->_sizeUnits,
      'weightUnits'=> $this->_weightUnits,
      'volumeUnits'=> $this->_volumeUnits,
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
      Product::where('id', $id)
      ->update([
        'category_id' =>  $request->category,
        'name' => $request->name,
        'slug' => Miscellaneous::slugify($request->name),
        'brand' => $request->brand,
        'sku' =>  $request->sku,
        'old_price' => $request->oldPrice,
        'price' => $request->price,
        'is_active' => true,
        'pre_description' => $request->preDescription,
        'description' => $request->description,
        'stock' => $request->stock,
        'size' => $request->size,
        'size_unit_id' => $request->sizeUnit,
        'volume' => $request->volume,
        'volume_unit_id' => $request->volumeUnit ,
        'weight' => $request->weight,
        'weight_unit_id' => $request->weightUnit,

      ]);
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
      $product = Product::findOrFail($id);
      $product->delete();
    }catch (QueryException $e){
      return false;
    }
    return redirect()->route('admin.product.index')->with('status', 'Your product was deleted');
  }
}
