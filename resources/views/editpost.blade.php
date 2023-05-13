@extends('layout')
@section('title', 'edit-'.$post->title)
@section('content')

<div class="container edit-page">
    <div class="btn-group">
        <a href="/" class="btn"> home</a>
        <a href="/posts" class="btn">posts</a>
    </div>
    <form class="form" method="POST" action="/update/{{$post->id}}">
        @csrf
        <div class="flow-text">Edit the post:</div>
        <div class="input-field">
            <i class="material-icons prefix">edit</i>
            <input id="title" type="text" name="title" value="{{$post->title}}" required>
            <label for="title">Title</label>
        </div>

        <div class="input-field">
            <i class="material-icons prefix">edit</i>
            <textarea id="post" class="materialize-textarea" name="body" required>{{$post->body}}</textarea>
            <label for="post">Textarea</label>
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection