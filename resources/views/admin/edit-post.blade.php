@extends('admin.layouts.admin')

@section('content')

  <h1> Edit Post: {{ $post->title }} </h1>

  @include ('admin.partials.errors')

  <form action="/admin/posts/create" method="post">

    <div class="form-group">

      <label for="title"> Title </label>
      <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">

      <label for="description"> Description </label>
      <input type="text" name="description" id="description" class="form-control" value="{{ $post->description }}">

      <label for="slug"> Slug </label>
      <input type="text" name="slug" id="slug" class="form-control" value="{{ $post->slug }}">

      <label for="author"> Author </label>
      <input type="text" name="author" id="author" class="form-control" value="{{ $post->author }}">

      <label for="content"> Content </label>
      <textarea name="content" id="content editor" class="form-control" rows="7" value="{!! $post->content !!}"> </textarea>

      <button type="submit" class="btn btn-success"> Save </button>

    </div>

    {{ csrf_field() }}

  </form>

@endsection
