@extends('layouts.app')

@section('content')
<div class="container">

  @foreach ($posts as $post)

  <div style="background-color: white; margin-bottom: 10px; padding: 10px;" class="row">

    <div class="col">

      <h1> <a href="/{{ $post->slug }}"> {{ $post->title }} </a> </h1>

      <h3> Written by {{ $post->author }}. </h3>

    </div>

    <div class="col">

      <p> {{ $post->description }} </p>

    </div>

  </div>

  @endforeach

</div>
@endsection
