@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <ul class="navigation-menu">
                    <li class="nav-category-divider">HOME</li>
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <span class="link-title">DASHBOARD</span>
                        </a>
                    </li>

        </div>
    </div>
</div>
@endsection
