<?php

namespace App\Http\Controllers;

use App\Traits\Customer;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
  use Customer;

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
  public function store(Request $request)
  {
    //
  }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
   */
  public function show()
  {
    $user = Auth::user();
    try{
      $cards = $this->getAllCards($user->id);
    }catch (\Exception $e){
//      TODO: Crear una vista para esta exepccion porque es el comienzo y no voy a poder hacer un back
      return $e->getMessage();
    }

    return view('user.show',[
      'user' => $user,
      'cards' => $cards['data']
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
  public function update(Request $request)
  {
    date('Y', strtotime(now()));
    $user = User::find(Auth::id());
    $oldUser = null;

    if( $user->email === $request->email){
      $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:32'],
        'lastName' =>['required', 'string', 'max:32'],
        'gender' => ['required', 'boolean'],
        'document' => ['numeric', 'nullable', 'min:5'],
        'country' => ['string', 'nullable','max:65'],
        'state' => ['string', 'nullable','max:65'],
        'city' => ['string', 'nullable','max:65'],
        'addressLine1' => ['string', 'nullable','max:255'],
        'addressLine2' => ['string', 'nullable','max:255'],
        'phoneNumber' => ['string', 'nullable']
      ]);

    }else{
      $validator = Validator::make($request->all(), [
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'name' => ['required', 'string', 'max:32'],
        'lastName' =>['required', 'string', 'max:32'],
        'gender' => ['required', 'boolean'],
        'document' => ['numeric', 'nullable', 'min:5'],
        'country' => ['string', 'nullable','max:65'],
        'state' => ['string', 'nullable','max:65'],
        'city' => ['string', 'nullable','max:65'],
        'addressLine1' => ['string', 'nullable','max:255'],
        'addressLine2' => ['string', 'nullable','max:255'],
        'phoneNumber' => ['string', 'nullable']
      ]);
      $oldUser = $user->email;
    }
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator->errors());
    }

    try{
      $user->update([
        'email' => ( ($request->email === $user->email) ? $user->email : $request->email ),
        'name' => $request->name,
        'last_name' => $request->lastName,
        'email' => $request->email,
        'gender' => ($request->gender == 1) ? true : false,
//      'avatar' => ($request->gender == 1) ? 'Uploads/Profiles/avatar-male.svg' : 'Uploads/Profiles/avatar-female.svg',
        'document' => $request->document,
        'country' => $request->country,
        'state' => $request->state,
        'city' => $request->city,
        'addressLine1' => $request->addressLine1,
        'addressLine2' => $request->addressLine2,
        'phoneNumber' => $request->phoneNumber,
        'is_subscriber' => ( ($request->isSubscriber) ? true : false )
      ]);

      if($oldUser !== $user->email){
        $user->sendEmailVerificationNotification();
      }


    }catch (QueryException $e){
      return redirect()->back()->withErrors('Ups Error updated user. Try Again. Message'.$e->getMessage());
    }
    if(is_null($oldUser)){
      session()->flash('successMessage', 'Your user was updated');
    }else{
      session()->flash('successMessage', 'Your user was updated.Please check your new email and confirm');
    }
    return redirect()->back();
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

  protected function paymentMethod(Request $request){
    try{
      $this->addCard($request->stripeToken, Auth::id());
    }catch (\Exception $e){
      return redirect()->back()->withErrors($e->getMessage());
    }

    session()->flash('successMessage', 'Your card was added');
    return redirect()->back();
  }

  /**
   * Delete specific card by user
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  protected function paymentMethodDestroy(Request $request){
    try{
      $this->destroyCard($request->_cardId, Auth::id());

    }catch (\Exception $e){
      return redirect()->back()->withErrors($e->getMessage());
    }

    session()->flash('successMessage', 'Your card was removed');
    return redirect()->back();
  }
}
