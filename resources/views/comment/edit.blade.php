@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit comment with IMAGE
                        <a href="{{ url('comments') }}" class="btn btn-outline-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-comment/'.$comment->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">comment</label>
                            <textarea type="text" name="comment_body" value="" class="form-control">{{$comment->comment}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update comment</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit comment with IMAGE
                        <a href="{{ url('comments') }}" class="btn btn-outline-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-comment/'.$comment->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">comment</label>
                            <textarea type="text" name="comment_body" value="" class="form-control">{{$comment->comment}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update comment</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit comment with IMAGE
                        <a href="{{ url('comments') }}" class="btn btn-outline-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-comment/'.$comment->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">comment</label>
                            <textarea type="text" name="comment_body" value="" class="form-control">{{$comment->comment}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update comment</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection