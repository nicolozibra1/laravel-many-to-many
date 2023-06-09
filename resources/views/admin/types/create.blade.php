@extends('layouts.admin')

@section('content')
    <h1>Create Type</h1>
    <form action="{{route('admin.types.store')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
@endsection
