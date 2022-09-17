@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="h3 mb-3 font-weight-normal text-center">Please Login</h1>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <form action="/login" method="POST">
          @csrf
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autofocus required value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
          <div class="d-flex">
            <button type="submit" class="btn btn-primary">LOGIN</button>
            <small class="ml-auto mt-3">Not register? <a href="/register">Register Now</a></small>
          </div>
        </form>
    </div>
</div>

@endsection