<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(){
        //$posts = Post::();
        $posts = Post::orderBy('created_at','desc')->paginate(1);
        return view('blog.index',compact('posts'));
    }



    public function show(){
        return view('blog.post');
    }
}
