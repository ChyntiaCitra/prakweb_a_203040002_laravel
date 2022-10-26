@extends('layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>

<p>By. Chyntia Citra in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</p></a>

{!! $post->body !!}}

<a href="/blog">Back</a>
@endsection