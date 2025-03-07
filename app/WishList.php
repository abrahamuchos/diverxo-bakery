<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
  protected $fillable = [
    'user_id',
    'product_id',
  ];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(){
    return $this->belongsTo(User::class,'user_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function product(){
    return $this->belongsTo(Product::class,'product_id');
  }

}
