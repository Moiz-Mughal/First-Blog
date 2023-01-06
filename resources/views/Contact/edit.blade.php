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
                    <h4>Edit contact with IMAGE...
                        <a href="{{ url('contacts') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-contact/'.$contact->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$contact->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">contact Email</label>
                            <input type="text" name="email" value="{{$contact->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">contact Course</label>
                            <input type="text" name="subject" value="{{$contact->subject}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Message</label>
                            <input type="text" name="message" class="form-control">                          
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update contact</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
