<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user)
    //the goal of this is to grab currently authenticated user and show the list of their posts as well as their information
    {
        $posts = $user->posts()->with(['user', 'likes'])->paginate(20);

        return view('users.posts.index',[
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
