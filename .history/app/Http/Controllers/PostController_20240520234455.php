<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $posts = Auth::user()->posts()->orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Auth::user()->find($id)->get();
    }
}
