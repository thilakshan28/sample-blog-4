@extends('layouts.admin.master')
@section('title', 'Post List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title"> {{ $post->title }}</h4>
                </div>
            </div>
            <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td><b>Title : </b></td>
                                <td>{{ $post->title }}</td>
                            </tr>
                            <tr>
                                    <td><b>Content : </b></td>
                                    <td> {!! $post->content !!}</td>
                                </tr>
                                <tr>
                                        <td><b>Created By : </b></td>
                                        <td> {!! $post->createdBy->name ?? 'N/A' !!}</td>
                                    </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection
