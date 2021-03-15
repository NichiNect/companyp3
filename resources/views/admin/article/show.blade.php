@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
            <h1>Describe Article : {{ $article->title }}</h1>
            
            <x-flash-message></x-flash-message>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped" id="table">
                            <tbody>
                                <tr>
                                    <th>Title</th>
                                    <td>:</td>
                                    <td>{{ $article->title }}</td>
                                </tr>
                                <tr>
                                    <th>Picture</th>
                                    <td>:</td>
                                    <td><img src="{{ asset('/storage/artikel/' . $article->picture) }}" alt=""></td>
                                </tr>
                                <tr>
                                    <th>Content</th>
                                    <td>:</td>
                                    <td>
                                        {!! $article->content !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Published At</th>
                                    <td>:</td>
                                    <td><i>{{ $article->created_at->diffForHumans() . ', ' . $article->created_at }}</i></td>
                                </tr>
                                <tr>
                                    <th>Author</th>
                                    <td>:</td>
                                    <td>{{ $article->user->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection