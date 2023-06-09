@extends('layouts.admin')

@section('content')
    <h1>Edit Post: {{$post->title}}</h1>
    <form action="{{route('admin.posts.update', $post->slug)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title', $post->title)}}" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image">image url</label>
            <input type="text" name="image" id="image" value="{{old('image', $post->image)}}" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body">body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control @error('title') is-invalid @enderror">{{old('body', $post->body)}}</textarea>
            @error('body')
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

