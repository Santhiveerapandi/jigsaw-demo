@extends('_layouts.master')

@section('body')
<h2>Manual BlogRoll</h2>
<ul>
    <li><a href="blog/blog-post-one">Blog Post One</a></li>
    <li><a href="blog/blog-post-two">Blog Post Two</a></li>
    <li><a href="blog/blog-post-three">Blog Post Three</a></li>
</ul>

<h2>Automatic BlogRoll</h2>
<ul>
    @foreach($posts as $post)
    <li><a href="{{$post->getUrl()}}">{{$post->title}}</a></li>
    @endforeach
</ul>

<h2>Remote BlogRoll (reddit.com/r/aww.json?raw_json=1)</h2>
<ul>
    @foreach($reddit as $post)
    <li><a href="{{$post->getUrl()}}">{{$post->title}}</a></li>
    @endforeach
</ul>
@endsection