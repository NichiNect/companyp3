@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Total Article</h3>
                    <h4>{{ $article }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Total User</h3>
                    <h4>{{ $user }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
