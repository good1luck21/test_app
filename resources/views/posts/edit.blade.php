@extends('welcome')

@section('app')
<h1>Pages#edit</h1>
<form action="/post/{{$post->id}}/update" method="post" >
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <input type="text" name="title" value="{{ $post->title }}">
  <input type="text" name="content" value="{{ $post->title }}">
  <input type="submit">
</form>

@endsection