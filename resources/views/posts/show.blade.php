@extends('layout.app')

@section('title', $post['title'])

@section('content')

@if($post['is_new'])
<div>a new blog post!</div>
@else
<div>An old blog post!</div>
@endif

<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>

@endsection