<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
  protected $fillable = [
        'user_id', 'first_name', 'last_name', 'dob', 'gender','state', 'address', 'phone', 'facebook_url', 'twitter_url','linkedin_url'
    ];
}
