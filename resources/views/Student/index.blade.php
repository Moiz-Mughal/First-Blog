@extends('layouts.admin_dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>First Blog
                        <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Add Student</a>
                    </h4>
                </div>
                <div class="table_ctrl">
                    <div class="card-body">
                        <table class="admin_table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/students/'.$item->profile_image) }}" width="70px" height="70px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        {{-- <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                        <form action="{{ url('delete-student/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
</div>

@endsection