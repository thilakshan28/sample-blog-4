@extends('layouts.admin.master')
@section('title', 'User List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="float-right">
                    <a href="{{ route('user.create') }}" class="btn btn-success btn-xs">Create</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>FirstName</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->firstname }}</td>
                            <td>{{ $role->roleby->name }}</td>
                            <td>
                                <a href="{{ route('post.show', $role->id) }}" class="btn btn-info btn-xs">Show</a>
                                <a href="{{ route('post.edit', $role->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                <a href="{{ route('post.delete', $role->id) }}" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-2">
                    <div class="float-right">
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
