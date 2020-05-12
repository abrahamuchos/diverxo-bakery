<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
  protected $fillable = [
    'attribute_id',
    'name',
    'value'
  ];

  /**
   * Recursive relationship attribute_id --> id
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function parent()
  {
    return $this->belongsTo(Attribute::class,'attribute_id');
  }

  /**
   * Recursive relationship id --> attribute_id
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function children()
  {
    return $this->hasMany(Attribute::class,'attribute_id');
  }
}
