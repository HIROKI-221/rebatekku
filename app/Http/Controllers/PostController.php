<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
    
    /**
     * 特定IDのpostを表示する
     * 
     * @params Object Post //引数の$postはid=1のPostインスタンス
     * @return Response post view
     */
     public function show(Post $post)
     {
         return view('posts.show')->with(['post' => $post]);
     }
}