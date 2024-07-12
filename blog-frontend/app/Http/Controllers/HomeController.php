<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index() {
        $allPostsResponse = Http::get('http://localhost:8181/api/post');
        $allPosts = $allPostsResponse->json()['post'];

        $popularPostsResponse = Http::get('http://localhost:8181/api/popular-post');
        $popularPosts = $popularPostsResponse->json()['post'];

        return view('home', [
            'allPosts' => $allPosts,
            'popularPosts' => $popularPosts,
        ]);
    }

    public function kvkk(){
        $response = Http::get('http://localhost:8181/api/kvkk-aydinlatma-metni');

        $kvkk_text = $response->json()['kvkk'];

        return view('site.kvkk-aydinlatma-metni', ['kvkk' => $kvkk_text]);
    }

    public function privacy_policy(){
        $response = Http::get('http://localhost:8181/api/privacy-policy');

        $policy_text = $response->json()['privacy_policy'];

        return view('site.privacy-policy', ['privacy_policy' => $policy_text]);
    }
}
