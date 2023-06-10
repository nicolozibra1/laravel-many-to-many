@extends('layouts.admin')

@section('content')
    <div class="box-show d-flex flex-column align-items-center gap-5">
        <h1>{{ $project->title}}</h1>
        <img class="w-50" src="{{$project->image}}" alt="{{$project->title}}">
        <div class="box-description d-flex flex-column align-items-center gap-2">
            <span class="text-black fw-semibold">Description: </span>
            <p class="container">{!! $project->description !!}</p>
        </div>
        <div class="row w-50">
            <div class="col-3 text-center">
                <h6 class="text-black fw-semibold">Type: </h6>
                @if($project->type_id)
                    <p>{{$project->type->name}}</p>
                @endif
            </div>
            <div class="col-3 text-center">
                <h6 class="text-black fw-semibold">Functionality: </h6>
                <p>{{$project->functionality}}</p>
            </div>
            <div class="col-3 text-center">
                @if ($project->technologies && count($project->technologies) > 0)
                    <h6 class="text-black fw-semibold">Technologies: </h6>
                    <div>
                        @foreach ($project->technologies as $technology)
                            <span class="badge rounded-pill text-bg-info">{{$technology->name}}</span>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-3 text-center">
                <h6 class="text-black fw-semibold">Resource: </h6>
                <a href="{{$project->resource}}">GitHub Repository</a>
            </div>
        </div>
    </div>
@endsection
