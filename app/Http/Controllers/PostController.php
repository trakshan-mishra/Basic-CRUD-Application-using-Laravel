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
        
        $posts = DB::table('posts')
            ->get();
        return view('posts.index',compact('posts'));
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

    public function show(string $id): View
    {
        $posts = Post::findOrFail($id);
        return view('posts.show',compact('posts') );
    }

    public function edit(string $id): View
    {
        $posts = Post::findOrFail($id);
        return view('posts.edit',compact('posts') );
    }
   
     
    public function update(Request $request, string $id): RedirectResponse
    {
        $posts = Post::findOrFail($id);
        $posts->update([
            'description' => $request->input('description')
        ]);
        return back();
    }

    public function destroy(string $id)
    {
        
        $posts = Post::find($id);
        $posts->delete();
        return back();
    }
   
}
