<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\PostReaction;
class Post extends Model {

    use SoftDeletes;

    protected $fillable = [
        'title', 'body', 'author_id', 'file', 'slug', 'status'
    ];

    public function user() {
        return $this->belongsTo(\App\User::class, 'author_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id')->orderBy('created_at', 'DESC');
    }

    public function cutBody() {
        return str_limit(strip_tags($this->body), 55, '...');
    }

    public function cutTitle() {
        return str_limit(strip_tags($this->title), 45, '...');
    }

    public function likeunlike() {
        return $this->hasMany(PostReaction::class, 'post_id');
    }

}
