@extends('layouts.admin.master')
@section('title', 'Post List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Posts</h4>
                </div>
                <div class="float-right">
                    <a href="{{ route('post.create') }}" class="btn btn-success btn-xs">Create</a>
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
                            <th>Title</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->createdBy->firstname ?? 'None' }}</td>
                            <td>
                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-info btn-xs">Show</a>
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                <a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-2">
                    <div class="float-right">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
