<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
  protected $fillable = [
    'category_id',
    'product_id',
    'content_id',
    'name',
    'src',
    'type',
  ];

  protected $table = 'medias';

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function product(){
    return $this->belongsTo(Product::class,'product_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function category(){
    return $this->belongsTo(Category::class,'content_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function content(){
    return $this->belongsTo(Attribute::class,'content_id');
  }


}
