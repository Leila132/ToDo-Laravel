@extends('layouts.main')
@section('content')
<div class="row px-4 text-right">
<div class="col-md-2"> <h3>{{ $project->proj_name }}</h3> </div>
<div class="col-md-1"> <a class="btn btn-primary" href="{{ route('project.edit', $project->id) }}" role="button">Update</a> </div>
<div class="col"> 
    <form action="{{ route('project.delete', $project->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger"> 
    </form>
</div>
<p class="h4"><a href="{{route('project.index')}}">Go back</p>
@foreach($tasks as $task)
    <div><a href="">{{$task->task_name}}</div>
@endforeach
</div>
@endsection