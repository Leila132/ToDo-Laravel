@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('project.store') }}" method="post">
    @csrf
    <div class="container px-4 text-right">
        <div class="row gx-5">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="proj_name" class="form-control" id="name" placeholder="Name">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
  </form>
</div>
@endsection