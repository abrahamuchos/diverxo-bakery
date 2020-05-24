<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable implements MustVerifyEmail
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'email',
    'password',
    'last_name',
    'gender',
    'avatar',
    'document',
    'country',
    'state',
    'city',
    'address_line1',
    'address_line2',
    'phone_number',
    'is_subscriber',
    'is_admin'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
    'is_subscriber'=> 'boolean',
    'is_admin'=> 'boolean'

  ];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function orders()
  {
    return $this->hasMany( Order::class, 'user_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function items()
  {
    return $this->hasMany( Item::class, 'user_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function socialProfile()
  {
    return $this->hasMany( SocialProfile::class, 'user_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function customers()
  {
    return $this->hasMany( Customer::class, 'user_id');
  }


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function wishList()
  {
    return $this->hasMany( WishList::class, 'user_id');
  }







}
