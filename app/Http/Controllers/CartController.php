<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $mightAlsoLikes = Product::mightAlsolike()->get();
    return view('cart.index',[
      'mightAlsoLikes' => $mightAlsoLikes
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


  public function store(Product $product)
  {
    $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
      return $cartItem->id === $product->id;
    });

    if ($duplicates->isNotEmpty()) {
      return redirect()->route('cart.index')->with('successMessage', 'Item is already in your cart!');
    }

    $cart = Cart::add([
      'id' => $product->id,
      'name' => $product->name,
      'qty' => 1,
      'price' => $product->price,
      'weight' => $product->weight ?? 0,
      'options' =>
        [
           'old_price'=> $product->old_price,
           'size' => $product->size,
           'volume' => $product->volume,
           'sizeUnit' => $product->sizeUnit,
           'weightUnit' => $product->weightUnit,
           'volumeUnit' => $product->volumeUnit
        ]
    ])->associate('App\Product');

    Cart::setTax($cart->rowId, 7);

    return redirect()->route('cart.index')->with('successMessage', 'Item was added to your cart!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
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
    $validator = Validator::make($request->all(), [
      'qty' => 'required|numeric|between:1,10'
    ]);

    if ($validator->fails()) {
      session()->flash('errors', collect(['Quantity must be between 1 and 10.']));
      return response()->json([
        'success' => false,
        'error' => $validator->errors()
      ], 400);
    }

    if ($request->qty > $request->productQty) {
      session()->flash('errors', collect(['We currently do not have enough items in stock.']));
      return response()->json(['success' => false], 400);
    }

    Cart::update($id, $request->qty);
    session()->flash('success_message', 'Quantity was updated successfully!');
    return response()->json(['success' => true]);

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Cart::remove($id);

    return back()->with('successMessage', 'Item has been removed!');
  }
}
