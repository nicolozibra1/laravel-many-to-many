@extends('layouts.admin')

@section('content')
    <h1>Create Project</h1>
    <form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="type">Type</label>
            <select name="type" id="type" class="py-2">
                @foreach ($types as $type )
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
            @error('type')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Image url</label>
            <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="functionality">Functionality</label>
            <input type="text" name="functionality" id="functionality" class="form-control @error('functionality') is-invalid @enderror">
            @error('functionality')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="technologies">Technologies</label>
            <input type="text" name="technologies" id="technologies" class="form-control @error('technologies') is-invalid @enderror">
            @error('technologies')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="resource">Resource</label>
            <input type="text" name="resource" id="resource" class="form-control @error('resource') is-invalid @enderror">
            @error('resource')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
