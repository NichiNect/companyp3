@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
            <h1>Create New Article</h1>
            
            <x-flash-message></x-flash-message>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg">
                <div class="card-header">Form Create New Article</div>
                <div class="card-body">
                    <form action="{{ route('admin.article.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('admin.article._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection