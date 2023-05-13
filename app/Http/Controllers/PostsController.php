<?php

namespace App\Http\Controllers;

use App\Models\Posts;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('posts', compact('posts'));
    }

    public function delete(string $id)
    {
        Posts::destroy($id);
        return PostsController::index();
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $title = $validatedData['title'];
        $post = $validatedData['body'];
        $posts = new Posts;
        $posts->title = $title;
        $posts->body = $post;
        $posts->save();
        return PostsController::index();
    }

    public function getOne(string $id)
    {
        $post = Posts::find($id);
        return view('singlepost', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Posts::find($id);
        return view('editpost', compact('post'));
    }

    public function update(Request $request, $id)
    {
        Posts::where('id', $id)->update([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);
        return PostsController::index();
    }
}
