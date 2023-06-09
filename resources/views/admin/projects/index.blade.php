@extends('layouts.admin')

@section('content')
    <h1>Index Projects</h1>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Add new project</a>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Image</th>
                <th scope="col">Created</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>
                        @if($project->type_id)
                            {{ $project->type->name }}
                        @endif
                    </td>
                    <td><img class="img-thumbnail" style="width:100px" src="{{ $project->image }}" alt="{{ $project->title }}">
                    </td>
                    <td>{{$project->user->name}} {{ $project->created_at }}</td>
                    <td><a href="{{ route('admin.projects.show', $project->slug) }}"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.projects.edit', $project->slug) }}"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="delete-button" data-item-title="{{ $project->title }}"> <i
                                    class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $projects->links('vendor.pagination.bootstrap-5') }}
    {{-- @include('partials.modal-delete') --}}
@endsection
