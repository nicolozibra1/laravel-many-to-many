@extends('layouts.admin')

@section('content')
    <h1>Edit technology: {{$technology->name}}</h1>
    <form action="{{route('admin.technologies.update', $technology->slug)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{old('name', $technology->name)}}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
