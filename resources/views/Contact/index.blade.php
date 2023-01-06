@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Contacts Contact
                        <a href="{{ url('add-contact') }}" class="btn btn-primary float-end">Add contact</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->subject }}</td>
                                <td>{{ $item->message }}</td>
                                <td>
                                    <a href="{{ url('edit-contact/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete-contact/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('delete-contact/'.$item->id) }}" method="POST">
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

@endsection