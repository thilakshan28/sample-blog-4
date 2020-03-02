@extends('layouts.admin.master')
@section('title', 'User List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Create User</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'user.store', 'method' => 'post']) !!}
                @include('admin.user._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('user.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Create </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
