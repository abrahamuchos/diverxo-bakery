<?php
namespace App\Traits;

use App\User;
use Cartalyst\Stripe\Exception\StripeException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

trait Customer{

  /**
   * @param $idUser
   * @return mixed
   * @throws \Exception
   */
  private function _checkCustomer($idUser){
    try{
      $customer = \App\Customer::where('user_id', $idUser)->firstOrFail();
      return $customer;
    }catch (ModelNotFoundException $e){
      throw new \Exception("Customer don't exists. Please contact with support");
    }
  }

  /**
   * Create a new customer
   * @param User $user
   * @return mixed
   * @throws \Exception
   */
  public function createCustomer(User $user){
    try{
      $customer = Stripe::customers()->create([
        'email' => $user->email,
        'name' => $user->name.' '.$user->last_name
      ]);
      \App\Customer::create([
        'user_id' => $user->id,
        'type_id' => 25,
        'customer_id' => $customer['id'],
      ]);
      return $customer;
    }catch (StripeException $e){
      throw new \Exception('Stripe Error. Code: '.$e->getCode().' Message: '. $e->getMessage() );
    }catch (QueryException $e){
      throw new \Exception('Database Error create user in customers'.$e->getCode().' Message: '. $e->getMessage() );
    }

  }

  /**
   * @param $stripeToken - Toke provided by Stripe.js when associating a card
   * @param $idUser - user id
   * @return bool - True if all it's ok
   * @throws \Exception
   */
  public function addCard($stripeToken, $idUser){
    try{
      $customer = $this->_checkCustomer($idUser);
    }catch (\Exception $e){
      throw new \Exception($e->getMessage());
    }

    try{
      Stripe::cards()->create($customer->customer_id, $stripeToken);
    }catch (Cartalyst\Stripe\Exception\InvalidRequestException $e){
      throw new \Exception("Stripe error add new card. Please try again. Code: ". $e->getCode() );
    }

    return true;

  }


  /**
   * Get all cards by customer id
   * @param $idUser
   * @return mixed
   * @throws \Exception
   */
  public function getAllCards($idUser){
    try{
      $customer = $this->_checkCustomer($idUser);
    }catch (\Exception $e){
      throw new \Exception($e->getMessage());
    }

    try{
      $cards = Stripe::cards()->all($customer->customer_id);
    }catch (Cartalyst\Stripe\Exception\InvalidRequestException $e){
      throw new \Exception("Stripe error show cards. Please refresh this page. Code: ". $e->getCode() );
    }

    return $cards;

  }

  /**
   * Destroy and specific card
   * @param $id - Id card, provided by stripe
   * @param $idUser - User id
   * @return bool
   * @throws \Exception
   */
  public function destroyCard($id, $idUser){
    try{
      $customer = $this->_checkCustomer($idUser);
    }catch (\Exception $e){
      throw new \Exception($e->getMessage());
    }

    try{
      Stripe::cards()->delete($customer->customer_id, $id);
    }catch (Cartalyst\Stripe\Exception\InvalidRequestException $e){
      throw new \Exception('Stripe error remove cards. Please try agin. Code: '. $e->getCode());
    }

    return true;
  }

}