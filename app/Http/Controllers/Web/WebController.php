<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class WebController extends Controller
{
    public function index() {
      $data['posts'] = Post::with('user')->whereStatus(1)->with('likeunlike')->orderBy('created_at', 'DESC')->paginate(8); 
      return view('web.post.index', $data);
      
    }
    
     public function home() {
      $data['posts'] = Post::with('user')->whereStatus(1)->with('likeunlike')->orderBy('created_at', 'DESC')->take(9)->get(); 
      return view('web.index', $data);
      
    }
}
