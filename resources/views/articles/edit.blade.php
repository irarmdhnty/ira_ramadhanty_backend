@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card p-3">
                <h5 class="px-3 fw-bold fs-4">Edit Data</h5>
                <div class="card-body">
                    <form action="{{ url('/article/update/'.$article->id) }}" id="formAdd" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 mb-4">
                            <input class="form-control" type="text" placeholder="Title" aria-label="default input example"
                                name="title" value="{{ $article->title }}">
                        </div>
                        <div class="col-md-12 mb-4">
                            <input class="form-control" type="file" id="formFileMultiple" name="image">
                        </div>

                        <div class="col-md-12">
                            <textarea id="" cols="100" rows="5" name="content" class="w-100">{{ $article->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn_add mt-3 w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
