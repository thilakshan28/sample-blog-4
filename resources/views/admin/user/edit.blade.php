@extends('layouts.admin.master')
@section('title', 'User List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit Your Prrofile - {{ $user->firstname }}</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'patch']) !!}
                @include('admin.user._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('user.index') }}" class="btn btn-dark btn-xs">Cancle</a>
                        <button class="btn btn-success btn-xs float-right"> Update </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
