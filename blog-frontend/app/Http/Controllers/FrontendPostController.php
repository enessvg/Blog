<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendPostController extends Controller
{
    // public function index(){

    //     $response = Http::get('http://localhost:8181/api/post');

    //     $posts = $response->json()['post'];

    //     return view('post.all-post', ['post' => $posts]);
    // }

    // public function popularPost(){

    //     $response = Http::get('http://localhost:8181/api/popular-post');

    //     $posts = $response->json()['post'];

    //     return view('post.popular-post', ['post' => $posts]);
    // }

    public function show($slug)
    {
        $response = Http::get("http://localhost:8181/api/post/detail/{$slug}");

        $post = $response->json()['post'];

        $comments = $response->json()['comments'];

        return view('post-detail', ['post' => $post, 'comments' => $comments]);
    }
}
