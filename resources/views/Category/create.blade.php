@extends('layouts.admin_dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add category
                        <a href="{{ url('categorys') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-category') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">category</label>
                            <input type="text" name="name" class="form-control" rows="3">
                        </div>
                       
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save category</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection