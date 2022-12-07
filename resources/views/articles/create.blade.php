@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card p-3">
                <h5 class="fw-bold fs-4 px-3">Create Data</h5>
                <div class="card-body">
                    <form action="{{ url('/article/store') }}" id="formAdd" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 mb-4">
                            <input class="form-control" type="text" placeholder="Title" aria-label="default input example"
                                name="title">
                        </div>
                        <div class="col-md-12 mb-4">
                            <input class="form-control" type="file" id="formFileMultiple" name="image">
                        </div>

                        <div class="col-md-12">
                            <textarea id="" cols="30" rows="5" name="content" class="w-100"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn_add mt-3 w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
