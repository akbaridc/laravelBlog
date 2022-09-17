@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
          {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
      <a href="/dashboard/categpries/create" class="btn btn-primary mb-3">Create New Post Categories</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a href="/dashboard/categories/{{ $data->slug }}" class="badge bg-info "><span data-feather="eye"></span></a>

                        <a href="/dashboard/categories/{{ $data->slug }}/edit" class="badge bg-warning "><span data-feather="edit"></span></a>

                        <form class="d-inline" action="/dashboard/categories/{{ $data->slug }}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>      
              @endforeach
          </tbody>
        </table>
      </div>
@endsection