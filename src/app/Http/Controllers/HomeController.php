<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{

    public function index(Request $request) {

        $order = $request->get('order', 'date'); 

        $posts = Post::withCount(['likes', 'comments']); 

        if ($order === 'likes') {
            $posts = $posts->orderBy('likes_count', 'desc');
        } elseif ($order === 'comments') {
            $posts = $posts->orderBy('comments_count', 'desc');
        } else {
            $posts = $posts->latest();
        }

    $posts = $posts->get();

    return view('home', compact('posts', 'order'));
    }
}
