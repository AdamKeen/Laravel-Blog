@extends('admin.layouts.admin')

@section('content')

  <h1> New Post </h1>

  @include ('admin.partials.errors')

  <form action="/admin/posts/create" method="post">

    <div class="form-group">

      <label for="title"> Title </label>
      <input type="text" name="title" id="title" class="form-control">

      <label for="description"> Description </label>
      <input type="text" name="description" id="description" class="form-control">

      <label for="slug"> Slug </label>
      <input type="text" name="slug" id="slug" class="form-control">

      <label for="author"> Author </label>
      <input type="text" name="author" id="author" class="form-control">

      <label for="content"> Content </label>
      <textarea name="content" id="content editor" class="form-control" rows="7"> </textarea>

      <button type="submit" class="btn btn-success"> Save </button>

    </div>

    {{ csrf_field() }}

  </form>

@endsection
