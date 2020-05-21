<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  protected $findByPrice;
  protected $findByCategory;

  public function __construct()
  {
    $this->findByPrice = request()->findByPrice;
    $this->findByCategory = request()->findByCategory;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::all();
    $products = Product::with('sizeUnit','volumeUnit','weightUnit', 'medias', 'category');

    if($this->findByCategory && $this->findByPrice ){
      $products = $this->_searchByCategories($products, $this->findByCategory);
      $products = $this->_searchByPrice($products, $this->findByPrice);
    }elseif($this->findByCategory) {
      $products = $this->_searchByCategories($products, $this->findByCategory);

    }elseif ($this->findByPrice){
      $products = $this->_searchByPrice($products, $this->findByPrice);
    }

//    Validate if product is has values
    if(is_null($products)) {
      $products = array();
    }else{
      $products = $products->paginate(9);
    }
    return view('product.index',[
      'products' => $products,
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
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Show a specific product
   * @param $slug
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function show($slug)
  {
    $mightAlsoLikes = Product::mightAlsoLike()->get();

    try{
      $product = Product::where('slug',  $slug)->with('sizeUnit','volumeUnit','weightUnit', 'medias', 'category')->first();

    }catch (ModelNotFoundException $e){
      return view('product.404');
    }

    return view('product.show',[
      'product' => $product,
      'mightAlsoLikes' => $mightAlsoLikes
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }


  private function _searchByPrice($products, $orderBy)
  {
    if ($orderBy === 'desc') {
      return $products->orderBy('price', $orderBy);
    } else {
      return $products->orderBy('price', $orderBy);
    }
  }


  private function _searchByCategories($products, $slug)
  {

    $categoryParent = Category::where('slug', $slug)->first();

    if(is_null($categoryParent->category_id))
    {
      $categoryChildren = Category::where('category_id', $categoryParent->id)->pluck('id')->toArray();
      array_push($categoryChildren, $categoryParent->id);
      $products->whereHas('category', function($q) use ($categoryChildren){
        return $q->whereIn('id',$categoryChildren);
      });

    } else {
      $products->whereHas('category', function($q) use ($slug){
        return $q->where('slug','=', $slug);
      });
    }
    return $products;

  }
}
