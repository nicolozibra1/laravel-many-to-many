@extends('layouts.admin')

@section('content')
    <h1 class="mb-3">Technology List</h1>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('admin.technologies.create') }}">Add new technology</a>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row mt-3">
        @foreach ($technologies as $technology )
            <div class="col-3">
                <div class="card mb-3 py-2">
                    <div class="card-title text-center">
                        <a href="{{ route('admin.technologies.show', $technology->slug) }}" class="text-decoration-none fw-semibold">
                            {{$technology->name}}
                        </a>
                    </div>
                    <div class="card-body text-center d-flex justify-content-center gap-2">
                        <a href="{{ route('admin.technologies.edit', $technology->slug) }}"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.technologies.destroy', $technology->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="delete-button" data-item-title="{{ $technology->name }}"> <i
                                    class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
