<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {

  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $categories = Category::with('medias')->where('category_id', null)->get();

    $products = Product::with('sizeUnit','volumeUnit','weightUnit', 'medias')->get()->random(6);

    return view('home',[
      'categories' => $categories,
      'products' => $products
    ]);
  }
}
