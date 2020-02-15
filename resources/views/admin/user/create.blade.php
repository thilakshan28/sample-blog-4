@extends('layouts.admin.master')
@section('title', 'Post List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Create Post</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'post.store', 'method' => 'post']) !!}
                @include('admin.post._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('post.index') }}" class="btn btn-dark btn-xs">Cancle</a>
                        <button class="btn btn-success btn-xs float-right"> Create </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
