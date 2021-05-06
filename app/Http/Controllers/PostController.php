<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::get();//vraca sve postove iz baze onako kako su u bazi poredani
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
