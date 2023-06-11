@extends('layouts.admin')

@section('content')
    <h1>Edit Project: {{$project->title}}</h1>
    <form action="{{route('admin.projects.update', $project->slug)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title', $project->title)}}" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="type">Type</label>
            <select name="type" id="type" class="py-2">
                @foreach ($types as $type )
                    <option value="{{$type->id}}" {{$type->id == old('type_id', $project->type_id) ? 'selected' : ''}}>{{$type->name}}</option>
                @endforeach
            </select>
            @error('type')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" value="{{old('image', $project->image)}}" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{old('description', $project->description)}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="functionality">Functionality</label>
            <input type="text" name="functionality" id="functionality" value="{{old('functionality', $project->functionality)}}" class="form-control @error('functionality') is-invalid @enderror">
            @error('functionality')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <p>Select the technologies used:</p>
            <div class="d-flex gap-2">
                @foreach ($technologies as $technology )
                @if ($errors->any())
                    <input type="checkbox" name="technologies[]" value="{{$technology->id}}" class="form-check-input" {{in_array($technology->id, old('technologies', [])) ? 'checked' : ''}}>
                @else
                    <input type="checkbox" name="technologies[]" value="{{$technology->id}}" class="form-check-input" {{ $project->technologies->contains($technology) ? 'checked' : '' }}>
                @endif
                    <label class="form-check-label" for="">{{$technology->name}}</label>
                @endforeach
            </div>
            @error('technologies')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="resource">Resource</label>
            <input type="text" name="resource" id="resource" value="{{old('resource', $project->resource)}}" class="form-control @error('resource') is-invalid @enderror">
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
