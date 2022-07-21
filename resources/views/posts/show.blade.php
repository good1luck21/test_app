@extends('welcome')

@section('app')
<h1>Pages#show</h1>

title: {{ $post->title }}
content: {{ $post->content }}

@endsection