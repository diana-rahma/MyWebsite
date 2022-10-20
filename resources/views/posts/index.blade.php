@extends('layout.app')

@section('title', 'Blog Posts')

@section('content')

@forelse ($posts as $key => $post)

@if($loop->even)
<div>{{ $key }}. {{ $post['title'] }}</div> 
@else
<div style="background-color: silver;">{{ $key }}. {{ $post['title'] }}</div> 
@endif

@empty
<p>Sorry, no post found</p>

@endforelse
@endsection