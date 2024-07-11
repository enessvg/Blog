<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $response = Http::get('http://localhost:8181/api/post');
        $posts = $response->json()['post'];
        return view('home', ['post' => $posts]);
    }
}
