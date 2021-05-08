<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::paginate(20);//paginate u slucaju velikog broja postova
        return view('posts.index', [
            'posts'=>$posts
        ]);
    }

    public function store(Request $request )
    {
       
        $this->validate($request,[
            'body'=>'required'
        ]);

        $request->user()->posts()->create($request->only('body'));//laravel automatski popunjava stupac user_id

        return back();
    }


}
