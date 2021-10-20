<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class crudController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('show', compact('posts'));
    }
    public function create()
    {
        return view('create');
    }
    public function insert()
    {
        $post = new Post;
        $post->title = request('title');
        $post->description = request('description');
        $post->save();
        return redirect('index');
    }
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('edit',compact('posts'));
    }
    public function update($id)
    {
        // return $id;

        $post = Post::find($id);
        $post->title=request('title');
        $post->description=request('description');
        $post->save();
        return redirect('/index');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/index');
    }
}
