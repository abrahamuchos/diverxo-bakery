<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
  use Notifiable;

  public $timestamps = false;
  protected $fillable = [
    'user_id',
    'type_id',
    'social_id',
  ];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(){
    return $this->belongsTo(User::class,'user_id');
  }

  /**
   * Type of Social network (Google, Facebbok, Linkeind
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function socialType(){
    return $this->belongsTo(Attribute::class, 'type_id');
  }
}
