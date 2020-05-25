<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\Clients\OrderMail;
use App\Product;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\Customer as CustomerTrait;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
  use CustomerTrait;

  protected $orderController;

  public function __construct(OrderController $orderController)
  {
    $this->orderController = $orderController;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (Cart::instance('default')->count() == 0) {
      return redirect()->route('product.index');
    }

    try{
      $this->_productsAreNoLongerAvailable();
      $cards = $this->getAllCards(Auth::id());
    }catch (\Exception $e){
      return redirect()->back()->withErrors($e->getMessage());
    }

    return view('checkout.index',[
      'cards' => $cards['data']
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

  protected function selectCard(Request $request){
    if($request->cardId){
      return redirect()->route('checkout.confirm', $request->cardId);
    }else{
      return redirect()->back()->withErrors('Ups something wrong. Please Try again');
    }


  }
  protected function confirm(Request $request){
    try{
      $customer = Customer::where('user_id', Auth::id())->first();

      $charge = Stripe::charges()->create([
        'customer' => $customer->customer_id,
        'source' => $request->cardId,
        'currency' => env('STRIPE_CURRENCY'),
        'amount'   =>  Cart::total(),
      ]);

      $idOrder = $this->orderController->create($charge);


    }catch (Cartalyst\Stripe\Exception\InvalidRequestException $e){
      return redirect()->back()->withErrors('Ups something wrong. Please Try again');
    }catch (\Exception $e){
      return redirect()->back()->withErrors($e->getMessage());
    }

    return redirect()->route('order.show', $idOrder);

  }

  /**
   * @return bool
   * @throws \Exception
   */
  private function _productsAreNoLongerAvailable()
  {
    foreach (Cart::content() as $item) {
      $product = Product::find($item->model->id);
      if ($product->stock < $item->qty) {
        throw new \Exception('This product are not longer available '. $item->model->name);
      }
    }

    return false;
  }

}
