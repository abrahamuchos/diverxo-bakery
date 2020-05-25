<?php

namespace App\Http\Controllers;

use App\Item;
use App\Mail\Clients\OrderMail;
use App\Order;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }


  public function create($charge)
  {
    $user = Auth::user();
    try{
      $order = Order::create([
        'user_id' => $user->id,
        'charge_id' => $charge['id'],
        'processed' => true,
        'total' => $charge['amount'],
        'risk_level' => $charge['outcome']['risk_level'],
        'status' => $charge['status'],
        'receipt_url' => $charge['receipt_url'],
        'payment_method' => $charge['payment_method'],
        'balance_transaction' => $charge['balance_transaction']
      ]);

      foreach (Cart::content() as $item){
        Item::create([
          'user_id' => $user->id,
          'order_id' => $order->id,
          'product_id' => $item->id,
          'qty' => $item->qty,
          'price' => $item->price
        ]);
      }

      $this->_decreaseQuantities();
      Mail::to($user->email)->send(new OrderMail($order->id));
      Cart::instance('default')->destroy();

    }catch (QueryException $e){
//      throw new \Exception('DB Error create order. Please contact support. Code: '.$e->getCode());
      throw new \Exception($e->getMessage());
    }catch (\Exception $e){
      throw new \Exception($e->getMessage());
    }

    return $order->id;
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
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    try{
      $order = Order::with('items')->findOrFail($id);
      $user = Auth::user();
      if($order->user_id != $user->id){
        return abort(419);
      }
    }catch (ModelNotFoundException $e){
      return abort(404);
    }

    return view('order.show',[
      'order' => $order,
      'user' => $user
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

  private function _decreaseQuantities(){
    foreach (Cart::content() as $item) {
      $product = Product::find($item->id);
      $product->update(['stock' => $product->stock - $item->qty]);
    }
  }
}
