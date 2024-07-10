<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index(){
        $comments = Comments::all();
        return response()->json([
            'status' => true,
            'message' => 'Listing successful',
            'post' => $comments,
        ], 200);
    }

    public function store(Request $request)
    {
        // Kontrol
        $validator = Validator::make($request->all(), [
            'post_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'content' => 'required',
        ]);

        // Hata Mesajımı döndürüyorum
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Yeni item oluşturma
            $item = new Comments();
            $item->post_id = $request->post_id;
            $item->name = $request->name;
            $item->email = $request->email;
            $item->content = $request->content;
            $item->save();

            // Başarılı mesajı
            return response()->json(['message' => 'Comment saved.'], 201);
        } catch (\Exception $e) {
            //Beklenmeyen hataları yakalamak için
            return response()->json(['message' => 'An error occurred while trying to save the item!', 'error' => $e->getMessage()], 500);
        }
    }
}
