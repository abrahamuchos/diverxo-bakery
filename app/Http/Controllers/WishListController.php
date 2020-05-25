<?php

namespace App\Http\Controllers;

use App\Product;
use App\WishList;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('wishlist.index');
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
   * Store new items to Cart instance wish list
   * @param Product $product
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(Product $product)
  {
    $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($product) {
      return $cartItem->id === $product->id;
    });

    if ($duplicates->isNotEmpty()) {
      return redirect()->back()->with('successMessage', 'Item is already in your wish list!');
    }


    Cart::instance('wishlist')->add([
      'id' => $product->id,
      'name' => $product->name,
      'qty' => 1,
      'price' => $product->price,
      'weight' => $product->weight ?? 0,
      'options' =>
        [
          'old_price' => $product->old_price,
          'size' => $product->size,
          'volume' => $product->volume,
          'sizeUnit' => $product->sizeUnit,
          'weightUnit' => $product->weightUnit,
          'volumeUnit' => $product->volumeUnit
        ]
    ])->associate('App\Product');
    try{
      WishList::create([
        'user_id' => Auth::id(),
        'product_id' => $product->id
      ]);
    }catch (QueryException $e){
      return redirect()->back()->withErrors("DB Wish list don't store please try again. Code:". $e->getCode());
    }


    return redirect()->back()->with('successMessage', 'Item is already in your wish list!');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

  /**
   * Switch item from Saved for Later  to Cart.
   *
   * @param  int  $id - Id to cart instance
   * @return \Illuminate\Http\Response
   */
  public function switchToCart($id) {

    $product = Cart::instance('wishlist')->get($id);

    Cart::instance('wishlist')->remove($id);

    $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
      return $rowId === $id;
    });

    if ($duplicates->isNotEmpty()) {
      return redirect()->route('cart.index')->with('successMessage', 'Item is already in your Cart!');
    }

    Cart::instance('default')->add([
      'id' => $product->id,
      'name' => $product->name,
      'qty' => 1,
      'price' => $product->price,
      'weight' => $product->weight ?? 0,
      'options' =>
        [
          'old_price'=> $product->options->old_price,
          'size' => $product->options->size,
          'volume' => $product->options->volume,
          'sizeUnit' => $product->options->sizeUnit,
          'weightUnit' => $product->options->weightUnit,
          'volumeUnit' => $product->options->volumeUnit
        ]
    ])->associate('App\Product');

    return redirect()->route('cart.index')->with('success_message', 'Item has been moved to Cart!');
  }
}
