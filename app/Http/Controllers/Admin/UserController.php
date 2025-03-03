<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Traits\Customer;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    $users = User::orderBy('created_at', 'DESC')->get();

    return view('admin.user.index', [
      'users' => $users
    ]);
  }

  /**
   * Show the form for creating a new user.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.user.create');
  }

  /**
   * Store a new user
   * @param UserCreateRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(UserCreateRequest $request)
  {
    try{
      $user = User::create([
        'email' => $request->email,
        'is_admin' => $request->isAdmin ?? false,
        'name' => $request->name,
        'lastName' => $request->lastName,
        'password' => $request->password,
        'gender' => $request->gender,
        'document' => $request->document,
        'country' => $request->country,
        'state' => $request->state,
        'city' => $request->city,
        'addressLine1' => $request->addressLine1,
        'addressLine2' => $request->addressLine2,
        'phoneNumber' => $request->phoneNumber,
        'isSubscriber' => $request->isSubscriber,
      ]);
    }catch (QueryException $e){
      return response()->json([
        'success' => false,
        'code' => 2001,
        'error' => $e->getMessage()
      ], 500);
    }

    return response()->json([
      'success' => true,
      'userId' => $user->id
    ], 200);
  }

  /**
   * @param $id
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Http\Response
   */
  public function show($id)
  {
    try{
      $user = User::with('customers', 'orders')->findOrFail($id);
    }catch (ModelNotFoundException $e){
      return abort(404);
    }

    return view('admin.user.show', [
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
   * Update the specified user in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int                      $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      'email' => 'max:32',
      'name' => 'required|min:4|max:32',
      'lastName' => 'required|min:4|max:32',
      'gender' => 'required',
      'document' => 'max:32',
      'password' => 'confirmed',
      'country' => 'min:4|max:32',
      'state' => 'min:4|max:32',
      'city' => 'min:4|max:32',
      'addressLine1' => 'min:4|max:64',
      'addressLine2' => 'max:64',
    ]);
    try{
      $user = User::find($id);

      if($request->password){
        $user->update([
          'email' => $request->email ?? $user->email,
          'is_admin' =>  $request->isAdmin ?? false,
          'gender' => $request->gender,
          'name' => $request->name,
          'last_name' => $request->lastName,
//        'avatar' => $request->avatar,
          'password' => Hash::make($request->password),
          'document' => $request->document,
          'country' => $request->country,
          'state' => $request->state,
          'city' => $request->city,
          'address_line1' => $request->addressLine1,
          'address_line2' => $request->addressLine2,
          'phone_number' => $request->phoneNumber,
          'is_subscriber' => ($request->isSubscriber == null) ? false : $request->isSubscriber
        ]);
      }else{
        $user->update([
          'email' => $request->email ?? $user->email,
          'is_admin' => $request->isAdmin ?? false,
          'gender' => $request->gender,
          'name' => $request->name,
          'last_name' => $request->lastName,
//        'avatar' => $request->avatar,
          'document' => $request->document,
          'country' => $request->country,
          'state' => $request->state,
          'city' => $request->city,
          'address_line1' => $request->addressLine1,
          'address_line2' => $request->addressLine2,
          'phone_number' => $request->phoneNumber,
          'is_subscriber' => ($request->isSubscriber == null) ? false : $request->isSubscriber
        ]);
      }

    }catch(QueryException $e){
      return response()->json([
        'success' => false,
        'code' => 1001,
        'error' => $e->getMessage()
      ], 500);

    } catch (\Exception $e){
      return response()->json([
        'success' => false,
        'code' => 1001,
        'error' => $e->getMessage()
      ], 500);
    }

    return response()->json([
      'success' => true,
      'data' => $user,
    ], 200);
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
      $user = User::findOrFail($id);
      $user->delete();
    }catch (ModelNotFoundException $e){
      return back()->withErrors([
        'code' => 1001,
        'message' => 'User nor found'
      ]);
    }catch (\Exception $e){
      return back()->withErrors([
        'code' => $e->getCode(),
        'message' => 'Error'.$e->getMessage()
      ]);
    }

    return redirect()->route('admin.user.index')->with('status', 'User was deleted');

  }
}
