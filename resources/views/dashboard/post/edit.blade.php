@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit New Post</h1>
    </div>

    <div class="col-lg-8 mb-3">
        <form method="POST" class="mb-5" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title', $post->title) }}">
              @error('title')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value="{{ old('slug', $post->slug) }}">
              @error('slug')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control" name="category_id" id="category_id">
                @foreach ($categories as $data)
                  @if (old('category_id', $post->category_id) == $data->id)
                    <option value="{{ $data->id }}" selected>{{ $data->name }}</option>
                  @else
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="image">Post Image</label>
              <input type="hidden" name="oldImage" value="{{ $post->image }}">
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
              @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
              @endif
              <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" onchange="previewImage()">
              @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="body">Body</label>
              @error('body')
                <p class="text-danger">{{ $message }}</p>
              @enderror
              <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
              <trix-editor input="body"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>

    <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function(){
          fetch('/dashboard/posts/checkSlug?title='+ title.value)
              .then(response => response.json())
              .then(data => slug.value = data.slug)
      });

      documen.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
      })

      function previewImage()
      {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>
      
@endsection