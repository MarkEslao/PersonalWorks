@extends('layouts.app')

@section('content')
    <a href="/posts" class="button pull-left">Back</a>
    <br/>
<hr/>
    <h1>{{$post->title}}</h1>
    <blockquote>{{$post->body}}</blockquote>
    <hr/>
    <small>Written on {{$post->created_at}}</small>
@endsection