@extends('layouts.admin.master')
@section('title', 'User List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title"> {{ $user->firstname }} {{ $user->lastname }}</h4>
                </div>
                <div class="float-right">
                    <h4 class="card-title"> {{ $user->roleBy->name }}</h4>
                </div>
            </div>
            <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td><b>FirstName : </b></td>
                                <td>{{ $user->firstname }}</td>
                            </tr>
                            <tr>
                                <td><b>LastName : </b></td>
                                <td> {!! $user->lastname !!}</td>
                            </tr>
                            <tr>
                                <td><b>Phone No: </b></td>
                                <td> {!! $user->phone_no !!}</td>
                            </tr>
                            <tr>
                                <td><b>Email : </b></td>
                                <td> {!! $user-> email !!}</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection
