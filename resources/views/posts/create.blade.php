@extends('welcome')

@section('app')
<h1>Pages#create</h1>
<a href="/posts/create"></a>
<form action="/post/store" method="post" >
  {{ csrf_field() }}
  <input type="text" name="title">
  <input type="text" name="content">
  <input type="submit">
</form>

@endsection