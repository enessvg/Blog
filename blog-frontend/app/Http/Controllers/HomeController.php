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

        $allCategoryResponse = Http::get('http://localhost:8181/api/category');
        $allCategory = $allCategoryResponse->json()['categories'];

        return view('home', [
            'allPosts' => $allPosts,
            'popularPosts' => $popularPosts,
            'allCategory' => $allCategory,
        ]);
    }

    public function SingleCategory($slug){
        $response = Http::get("http://localhost:8181/api/category/{$slug}");

        $categorie = $response->json()['categories'];

        $CategoryPost = $response->json()['posts'];

        //bunları navbarda kategoriler kısmında allCategory bulamadığı için yazdım.
        $responseCategory = Http::get('http://localhost:8181/api/category');
        $allCategory = $responseCategory->json()['categories'];

        return view('category', ['categorie' => $categorie, 'categoryPost' => $CategoryPost, 'allCategory' => $allCategory]);
    }


    public function kvkk(){
        $response = Http::get('http://localhost:8181/api/kvkk-aydinlatma-metni');

        $kvkk_text = $response->json()['kvkk'];

        //bunları navbarda kategoriler kısmında allCategory bulamadığı için yazdım.
        $responseCategory = Http::get('http://localhost:8181/api/category');
        $allCategory = $responseCategory->json()['categories'];

        return view('site.kvkk-aydinlatma-metni', ['kvkk' => $kvkk_text, 'allCategory' => $allCategory]);
    }

    public function privacy_policy(){
        $response = Http::get('http://localhost:8181/api/privacy-policy');

        $policy_text = $response->json()['privacy_policy'];

        //bunları navbarda kategoriler kısmında allCategory bulamadığı için yazdım.
        $responseCategory = Http::get('http://localhost:8181/api/category');
        $allCategory = $responseCategory->json()['categories'];

        return view('site.privacy-policy', ['privacy_policy' => $policy_text, 'allCategory' => $allCategory]);
    }
}
