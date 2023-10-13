@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('project.update', $project->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="container px-4 text-right">
        <div class="row gx-5">
            <div class="mb-3">
                <label for="name" class="form-label">New name</label>
                <input type="text" name="proj_name" class="form-control" id="name" placeholder="Name" value="{{ $project->proj_name }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
  </form>
</div>
@endsection