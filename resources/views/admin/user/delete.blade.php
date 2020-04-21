@extends('layouts.admin.master')
@section('title', 'User List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Delete Profile - {{ $user->firstname}}</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete']) !!}

                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-danger mb-2 mt-2">
                            <div class="card-header">
                                <h5 class="card-title">Delete - {{ $user->firstname }}</h4>
                            </div>
                            <div class="card-body">
                                Are you sure to delete profile"{{ $user->firstname }}"?
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('user.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-danger btn-xs float-right"> Delete </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
