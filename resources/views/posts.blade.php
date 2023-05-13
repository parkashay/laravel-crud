@extends('layout')
@section('title','posts')
@section('content')
<div class="container posts">
<a class="btn waves-effect" href="/">Home</a>
    <table class="highlight">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>post</th>
            <th>Created Date</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
        <tr onclick="navigateTo('/singlepost/{{$post->id}}')" class="table-row">
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{substr($post->created_at,0,10)}}</td>
            <td><a href="/delete/{{$post->id}}" class="btn red">
                    <i class="material-icons">delete</i>
                </a>
                <a href="/edit/{{$post->id}}" class="btn black">
                    <i class="material-icons">edit</i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    
</div>
@endsection
<script>
    function navigateTo(url){
        window.location.href = url;
    }
</script>