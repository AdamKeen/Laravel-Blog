@extends('layouts.app')

@section('content')
<div class="container">

  @foreach ($posts as $post)

  <div style="background-color: white; margin-bottom: 10px; padding: 10px;" id="{{ $post->id }}" class="post">

    <h1> <a href="#{{ $post->id }}"> {{ $post->title }} </a> </h1>
    <h4> Written by {{ $post->author }} </h4>

    {!! $post->content !!}

  </div>

  @endforeach

</div>
@endsection
