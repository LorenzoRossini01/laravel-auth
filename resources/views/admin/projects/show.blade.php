@extends('layouts.app')

@section('content')
  <div class="container">
    <h2 class="fs-4 text-secondary my-4">Project Details</h2>

    <div class="card">
        <div class="card-header">
            <h2>{{$project['title']}}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <img src="{{$project['imageUrl']}}" alt="" class="image-fluid">
                </div>
                <div class="col">
                    <p>{{$project['description']}}</p>                    
                    <a href="{{$project['link']}}">{{$project['link']}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-warning w-100">Edit project details</a>
        </div>
        <div class="col-6">
            <a class="btn btn-danger w-100">Delete project</a>
        </div>
    </div>


  </div>
@endsection
