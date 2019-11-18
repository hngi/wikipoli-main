<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTakeDown extends Model
{
  protected $casts = [
        'reason' => 'array'
    ];
   protected $fillable = ['post_id', 'reason', 'user_id'];
}
