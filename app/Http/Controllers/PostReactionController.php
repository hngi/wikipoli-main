<?php

namespace App\Http\Controllers;

use App\PostReaction;
use Illuminate\Http\Request;
use Auth;

class PostReactionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function like(Request $request) {
   
        if (!Auth::check()) {
            return ([
                'status' => 422,
                'post_id' => $request->post_id,
                'message' => 'Login To ' . $request->actions
            ]);
        }
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $actions = $request->actions;
        $type = $request->actions;
        $post = $request->post_id;
        switch ($actions) {
            case 'like':
                $delete = PostReaction::whereType($type)->whereUser_id(Auth::user()->id)->wherePost_id($post)->first();
                if (is_object($delete)) {
                    $delete->delete();
                    return ([
                        'status' => 200,
                        'post_id' => $post,
                        'message' => 'liked',
                    ]);
                }
                $check = PostReaction::whereUser_id(Auth::user()->id)->wherePost_id($post)->first();
                if (is_object($check)) {
                    $check->update([
                        'type' => $type
                    ]);
                    return ([
                        'status' => 200,
                        'post_id' => $post,
                        'message' => 'liked',
                    ]);
                } else {
                    PostReaction::create($input);
                    return ([
                        'status' => 200,
                        'post_id' => $post,
                        'message' => 'liked',
                    ]);
                }


                break;
            case 'unlike':
                 $delete = PostReaction::whereType($type)->whereUser_id(Auth::user()->id)->wherePost_id($post)->first();
                if (is_object($delete)) {
                    $delete->delete();
                    return ([
                        'status' => 200,
                        'post_id' => $post,
                        'message' => 'unliked',
                    ]);
                }
                $check = PostReaction::whereUser_id(Auth::user()->id)->wherePost_id($post)->first();
                if (is_object($check)) {
                    $check->update([
                        'type' => $type
                    ]);
                    return ([
                        'status' => 200,
                        'post_id' => $post,
                        'message' => 'Unliked',
                    ]);
                } else {
                    PostReaction::create($input);
                    return ([
                        'status' => 200,
                        'post_id' => $post,
                        'message' => 'Unliked',
                    ]);
                }
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostReaction  $postReaction
     * @return \Illuminate\Http\Response
     */
    public function show(PostReaction $postReaction) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostReaction  $postReaction
     * @return \Illuminate\Http\Response
     */
    public function edit(PostReaction $postReaction) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostReaction  $postReaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostReaction $postReaction) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostReaction  $postReaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostReaction $postReaction) {
        //
    }

}
