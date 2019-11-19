<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\HasError;
use App\UserProfile;
use App\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class UserController extends Controller {

    use HasError;

    public function __construct() {
        $this->middleware('auth');
    }
 
    public function profile() {

        if(Auth::check()){
            
            $user=Auth::user();
            $posts=DB::table('posts')->where('author_id', $user->id)->get();

            return(view('users.profile.settings',['user'=>$user,'posts'=>$posts]));
            //echo $posts; 
        }
       // return view('users.profile.index');
    }

    public function myprofile() {

        if(Auth::check()){
            
            $user=Auth::user();
            $posts=DB::table('posts')->where('author_id', $user->id)->get();
            $liked_posts=DB::table('post_reactions')->where('user_id', $user->id)->get();
            $all_posts=DB::table('posts')->get();
            return(view('users.profile.profile',['user'=>$user,'posts'=>$posts,'all_posts'=>$all_posts,'liked_posts'=>$liked_posts]));
            //echo $posts; 
        }
       // return view('users.profile.index');
    }

    public function settings(Request $request) {
        //$posts = DB::table('posts')->where('author_id', Auth::user()->id)->get();
        return view('users.profile.index');
    }


    public function edit(Request $request) {

        $user = UserProfile::firstOrNew(array('user_id' => (Auth::user()->id)));
        $user->user_id = Auth::user()->id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->state = $request->state;
        $user->facebook_url = $request->facebook_url;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->twitter_url = $request->twitter_url;
        $user->linkedin_url = $request->linkedin_url;
        $user->save();
        //user
        User::whereId(Auth::user()->id)->update(['full_name' => $request->first_name . ' ' . $request->last_name,'email' => $request->email]);
        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Profile Updated");
        return back();
        /*$id = Auth::user()->id;
        $user = User::find($id);
        $user->full_name = $request->first_name . ' ' . $request->last_name;
        $user_profile = UserProfile::where('user_id', $id)->get();
        $user_profile->first_name = $request->first_name;
        $user_profile->last_name = $request->last_name;
        $user_profile->dob = $request->dob;
        $user_profile->gender = $request->gender;
        $user_profile->state = $request->state;
        $user_profile->facebook_url = $request->facebook_url;
        $user_profile->phone = $request->phone;
        $user_profile->address = $request->address;
        $user_profile->twitter_url = $request->twitter_url;
        $user_profile->linkedin_url = $request->linkedin_url;
        return "$user->full_name";
        $user->save();
        $user_profile->save();
        return back()->with('success', 'Profile Updated');*/
    }

    public function updateAvatar(Request $request) {
        //handling the user upload of avatar 
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        
        if(Auth::check()){
            
            $user=Auth::user();
            $posts=DB::table('posts')->where('author_id', $user->id)->get();

            return(view('users.profile.settings',['user'=>$user,'posts'=>$posts]));
            //echo $posts; 
        }
    }

}
