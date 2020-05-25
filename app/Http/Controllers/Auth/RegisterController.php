<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Traits\Customer;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers, Customer;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'name' => ['required', 'string', 'max:32'],
      'lastName' =>['required', 'string', 'max:32'],
      'gender' => ['required', 'boolean'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'document' => ['numeric', 'nullable', 'min:5'],
      'country' => ['string', 'nullable','max:65'],
      'state' => ['string', 'nullable','max:65'],
      'city' => ['string', 'nullable','max:65'],
      'addressLine1' => ['string', 'nullable','max:255'],
      'addressLine2' => ['string', 'nullable','max:255'],
      'phoneNumber' => ['string', 'nullable']
    ]);
  }

  /**
   * @param array $data
   * @return mixed
   * @throws \Exception
   */
  protected function create(array $data)
  {
     $user = User::create([
      'name' => $data['name'],
      'last_name' => $data['lastName'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'gender' => ($data['gender'] == 1) ? true : false,
      'avatar' => ($data['gender'] == 1) ? 'Uploads/Profiles/avatar-male.svg' : 'Uploads/Profiles/avatar-female.svg',
      'document' => $data['document'],
      'country' => $data['country'],
      'state' => $data['state'],
      'city' => $data['city'],
      'addressLine1' => $data['addressLine1'],
      'addressLine2' => $data['addressLine2'],
      'phoneNumber' => $data['phoneNumber'],
    ]);

    $this->createCustomer($user);

    return $user;
  }
}
