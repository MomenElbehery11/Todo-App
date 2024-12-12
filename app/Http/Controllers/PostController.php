<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 public function store(Request $request){

    $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
    ]);
    Post::create([
        "title"=>$request->title,
        "body"=>$request->body,
    ]);
    return redirect()->route('post.read')->with('success', 'Post created successfully!');
 }
 public function read()
{
    $AllPosts = Post::all(); 
    return view('posts.read', compact('AllPosts')); 
}

public function edit($id)
{
    $post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));
}

public function update(Request $request, $id)
{
    
    $post = Post::findOrFail($id);

    
    $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
    ]);

    $post->update([
        'title' => $request->title,
        'body' => $request->body,
    ]);

    return redirect()->route('post.read')->with('success', 'Post updated successfully!');
}
public function delete($id)
{
    Post::findOrFail($id)->delete();
    return redirect()->route('post.read');
}
public function deleteAll()
{
    Post::truncate();
    return redirect()->route('post.read');
}
}