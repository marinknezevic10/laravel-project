<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {

        $posts=Post::latest()->with(['user', 'likes'])->paginate(20);//paginate u slucaju velikog broja postova

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
    
    public function destroy(Post $post)
    //we need to make sure to be able to delete posts that belong to a user
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }

    public function destroy(Post $post)
    //we need to make sure to be able to delete posts that belong to a user
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }

}
