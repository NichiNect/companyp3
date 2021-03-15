@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
            <h1>List All Articles</h1>

            <a href="{{ route('admin.article.create') }}" class="btn btn-outline-primary mb-3">Create New Article</a>
            
            <x-flash-message></x-flash-message>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Picture</th>
                            <th>Content</th>
                            <th>Published At</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $key => $a)
                        <tr>
                            <th>{{ $articles->count() * ($articles->currentPage() - 1) + $loop->iteration }}</th>
                            <td>{{ $a->title }}</td>
                            <td>
                                <img src="{{ asset('/storage/artikel/' . $a->picture) }}" alt="" class="img-thumbnail">
                            </td>
                            <td>
                                {!! Str::limit($a->content, 200) !!}
                            </td>
                            <td>{{ $a->created_at->diffForHumans() . ', ' . $a->created_at }}</td>
                            <td>{{ $a->user->name }}</td>
                            <td>
                                <a href="{{ route('admin.article.show', $a->id) }}" class="btn btn-info text-white my-1">Detail</a>
                                <a href="{{ route('admin.article.edit', $a->id) }}" class="btn btn-warning text-white my-1">Edit</a>
                                <form action="{{ route('admin.article.destroy', $a->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger text-white my-1" onclick="return confirm('Are you sure?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <h3>Data Kosong</h3>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</div>
@endsection