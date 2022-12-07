<title>Articles</title>

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h5 class="fw-bold mb-5 fs-3">List Of Articles</h5>
        <div class="card-header mb-3">
          <a href="{{ url('/article/create') }}" class="btn btn-primary">Create</a>
        </div>
        @foreach($article as $a)
        <div class="card mx-4 my-2 p-2" style="width: 50rem; ">
            <img src="{{ url('/images/'. $a->image ) }}" class="img-fluid w-25 mx-auto" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3">{{ $a->title }}</h5>
              <p class="card-text">{{ $a->content }}</p>
              <div class="d-flex float-end">
                <a href="{{ url('/article/edit/'. $a->id) }}" class="btn btn-info text-light me-2">Edit</a>
                <a href="{{ url('/article/destroy/'. $a->id) }}" class="btn btn-danger">Delete</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
