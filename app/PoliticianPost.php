<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class PoliticianPost extends Model
{
    protected $fillable = [
        'post_id', 'politician_id'
    ];
    
     public function post() {
        return $this->hasMany(Post::class,  'id', 'post_id')->whereStatus(1);
        
    }
}
