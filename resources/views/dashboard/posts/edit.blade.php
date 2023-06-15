@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Post</h1>
  <hr>
</div>

<div class="col-lg-6">
  {{-- mengarah ke store di DashboardPostController --}}
  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="mb-5">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" required autofocus value="{{ old('title', $post->title) }}">
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" readonly required value="{{ old('slug', $post->slug) }}">
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select name="category_id" id="category_id" class="form-control">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ ($category->id == old('category_id', $post->category->id) ? "selected" : "") }}>{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
      <small class="text-danger">
        {{ $message }}
      </small>   
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}" required>
     <trix-editor input="body"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary btn-sm">Save Post</button>
    
  </form>
</div>

<script>
  const title = document.querySelector("#title");
  const slug = document.querySelector("#slug");

  title.addEventListener('change', () => {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(res => res.json())
    .then(res => {
      slug.value = res.slug
      });
  })

  document.addEventListener('trix-file-accept', (e) => {
    e.preventDefault();
  })
</script>

@endsection
