<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostLiked;

class PostLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);//we cant like as unauthenticated user
    }

    public function store(Post $post, Request $request)
    {
        //we only want user to be able to give one like per post
        

        $post->likes()->create([
            'user_id'=>$request->user()->id,
        ]);

        //to send an email in laravel, and creating new instance 'PostLiked'
        Mail::to($post->user)->send(new PostLiked(auth()->user(), $post));

        return back();
    }

    public function destroy(Post $post, Request $request)
    {
        //we are going through the user into the likes table and in to the post where we are currently trying to delete like
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back();

    }
}
