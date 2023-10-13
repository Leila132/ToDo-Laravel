@extends('layouts.main')
@section('content')
<div class="container px-4 text-right">
<a class="btn btn-primary" href="{{ route('project.create') }}" role="button">Create</a>
@foreach($projects as $project)
      <div><a href="{{ route('project.show', $project->id) }}">{{$project->proj_name}}</div>
@endforeach
</div>
@endsection