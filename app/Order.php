<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'user_id',
    'charge_id',
    'processed',
    'total',
    'risk_level',
    'status',
    'receipt_url',
    'status',
    'payment_method',
    'balance_transaction'
  ];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function items(){
    return $this->hasMany(Item::class, 'order_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(){
    return $this->belongsTo(User::class,'user_id');
  }


}
