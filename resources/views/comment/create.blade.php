@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add comment with IMAGE
                        <a href="{{ url('comments') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-comment') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Comment</label>
                            <textarea type="text" name="comment_body" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection