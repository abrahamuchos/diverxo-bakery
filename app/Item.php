<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

  protected $fillable = [
    'user_id',
    'order_id',
    'product_id',
    'qty',
    'price',
  ];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo(User::class,'user_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function order()
  {
    return $this->belongsTo(Order::class,'order_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function product()
  {
    return $this->belongsTo(Product::class,'product_id');
  }


}
