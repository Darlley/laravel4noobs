<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    public function getPosts(){
        $posts = Post::paginate(5);
        $users = User::all();
        return view('managePosts', compact(['posts', 'users']));
    }
    public function getPost(Post $post){
        // $post = Post::find($post);
        // return view('welcome', compact('post'));
        return response()->json($post);
    }
}
