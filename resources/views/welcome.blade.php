@extends('layout')
@section('title','home')

@section('content')
<div class="container">
    <form action="/createpost" method="POST" class="form">
        @csrf
        <div class="input-field">
            <i class="material-icons prefix">title</i>
            <input id="title" type="text" name="title" required>
            <label for="title">Title</label>
        </div>
        <div class="input-field">
            <i class="material-icons prefix">event</i>
            <textarea id="post" class="materialize-textarea" name="body" required></textarea>
            <label for="post">Textarea</label>
        </div>
        <button type="submit" class="btn green">Submit</button>
    </form>
    <a class="btn" href="/posts"> See Posts</a>
</div>
@endsection