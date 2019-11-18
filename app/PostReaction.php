<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostReaction extends Model
{
   protected $fillable = ['post_id', 'type', 'user_id'];
}
