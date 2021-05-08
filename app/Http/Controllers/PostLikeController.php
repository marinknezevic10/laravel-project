<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

        return back();
    }
}
