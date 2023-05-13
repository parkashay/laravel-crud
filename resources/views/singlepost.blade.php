@extends('layout')
@section('title',$post->title)
@section('content')
<div class="container single-post">
    <div class="btn-group">
        <a href="/" class="btn"> home</a>
        <a href="/posts" class="btn">posts</a>
    </div>
    <div class="post-title flow-text">
        {{$post->title}}
    </div>
    <div class="post-body">
        {{$post->body}}
    </div>
</div>
@endsection