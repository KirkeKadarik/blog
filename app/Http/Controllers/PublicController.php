<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request)
    {
$perpage = 12;
        $page = $request->query('page');
// 1 => 0 ; 2 => 12 ; 3 => 24
        $skip = ($page - 1) * $perpage;
        $posts = Post::take(12)->skip($skip)->get();
        return view('welcome', compact('posts'));
    }

      public function buttons()
    {
        return view('buttons');
    }
}
