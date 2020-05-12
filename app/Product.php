<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'category_id',
    'name',
    'slug',
    'brand',
    'sku',
    'old_price',
    'price',
    'is_active',
    'pre_description',
    'description',
    'stock',
  ];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function items()
  {
    return $this->hasMany(Item::class, 'product_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function medias()
  {
    return $this->hasMany(Media::class, 'product_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function wishLists()
  {
    return $this->hasMany(WishList::class, 'product_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id');
  }




}
