<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'category_id',
    'name',
    'slug',
    'description',
  ];

  /**
   * Recursive relationship category_id --> id
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function parent()
  {
    return $this->belongsTo(Category::class,'category_id');
  }

  /**
   * Recursive relationship id --> category_id
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function children()
  {
    return $this->hasMany(Category::class,'category_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function products()
  {
    return $this->hasMany(Product::class, 'category_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function medias()
  {
    return $this->hasMany(Media::class, 'category_id', 'id');
  }
}
