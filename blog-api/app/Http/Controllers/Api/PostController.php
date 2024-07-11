<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return response()->json([
            'status' => true,
            'message' => 'Listing successful',
            'post' => $posts,
        ], 200);
    }

    public function show($slug){
        // Post'u slug ile bul
        $post = Post::where('slug', $slug)->where('is_visible', 1)->first();

        if (!$post) {
            return response()->json(['message' => 'The post you are trying to view was not found!'], 404);
        }

        $post->post_views += 1;
        $post->save();

        $comments = Comments::where('post_id', $post->id)
        ->where('is_visible', 1)
        ->get();

        $postArray = $post->toArray();
        $postArray['category_id'] = $post->category->name;
        $postArray['user_id'] = $post->user->name;



        return response()->json([
            'message' => 'Item found',
            'post' => $postArray,
            'comments' => $comments
        ], 200);
    }


}
