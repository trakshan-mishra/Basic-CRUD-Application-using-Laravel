<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        $posts = DB::table('posts')->get();
 
        return view('posts.index', ['posts' => $posts]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        Post::create([
            'description' => $request->input('description')
        ]);

        return back();
    }
}
