@extends('layouts.app')

@section('content')
    <h1>POSTS</h1>
    @if(count($posts) > 0)
        <ul class="actions">
        @foreach($posts as $post)
            <li>
                <h4><a href="/posts/{{$post->id}}" class="button">{{$post->title}}</a></h4>
                <small>Written on {{$post->created_at}}</small>
            </li>
            @endforeach
        </ul>
        <br/>
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
@endsection

