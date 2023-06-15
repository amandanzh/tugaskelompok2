@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  <div class="row justify-content-start">
    <div class="col-lg-8">
      <h2 class="my-0 mb-3">{{ $post->title }}</h2>

      <a href="/dashboard/posts/" class="btn btn-success btn-sm">
        <span data-feather="arrow-left"></span>
        Back to my posts
      </a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm">
        <span data-feather="edit"></span>
        Edit
      </a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
        @method('delete')
        @csrf
        <button class="btn btn-danger btn-sm" >
          <span data-feather="x-circle"></span>
          Delete
        </button>
      </form>

      <img src="https:source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid mb-3 mt-3">
      
      {{-- Tanpa htmlspeacialChar --}}
      <article class="mb-3">
        {!! $post->body !!}
      </article>
  
    </div>
  </div>
</div>

@endsection
 