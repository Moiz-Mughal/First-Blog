@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel 8 IMAGE CRUD
                        <a href="{{ url('add-comment') }}" class="btn btn-outline-success float-end">Add comment</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>comment</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comment as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->comment_body }}</td>
                                <td>
                                    <a href="{{ url('edit-comment/'.$item->id) }}" class="btn-outline-primary  btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete-comment/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('delete-comment/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-dange btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection