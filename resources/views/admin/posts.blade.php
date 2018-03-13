@extends('admin.layouts.admin')

@section('content')

  <h1> All Posts </h1>
  <p> <a href="/admin/posts/new"> Create one </a> </p>

  <table>

    <thead>

      <th> Name </th>

      <th> Description </th>

      <th> Action </th>

    </thead>

    <tbody>

      @if ($posts->count())
      @foreach ($posts as $post)

      <tr class="id-{{ $post->id }}">

        <td> {{ $post->title }} </td>

        <td> {{ $post->description }} </td>

        <td>

          <a class="btn btn-success" href="/#{{ $post->id }}"> View </a>

          <a class="btn btn-info" href="/admin/posts/edit/{{ $post->id }}"> Edit </a>

          <form action="{{ url('admin/posts/delete/' . $post->id) }}" method="post">

    				<button type="submit" class="btn btn-danger"> Delete </button>

    				{{ method_field('DELETE') }}

    				{{ csrf_field() }}

    			</form>

        </td>

      </tr>

      @endforeach
      @endif

    </tbody>

  </table>

@endsection
