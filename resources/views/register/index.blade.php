@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="h3 mb-3 font-weight-normal text-center">Register Form</h1>
        <form action="/register" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="your name" required value="{{ old('name') }}">
                  @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="your email" required value="{{ old('email') }}">
                  @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="username">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="your username" required value="{{ old('username') }}">
                  @error('username')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="your password" required>
                  @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary">REGISTER</button>
                <small class="ml-auto mt-3">You Have Account? <a href="/login">Login Now</a></small>
            </div>
        </form>
    </div>
</div>

@endsection