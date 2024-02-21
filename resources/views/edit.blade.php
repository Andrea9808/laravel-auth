@extends('layouts.app')
@section('content')
    <h1 class="text-danger text-center fw-bolder">Edit Project</h1>

    <form class="text-center my-3" action="{{ route('project.update', $project->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="d-flex flex-column w-25 m-auto">
            <label for="title">Title:</label>
            <input class="my-2" type="text" name="title" id="title" value="{{ $project->title }}">

            <label for="description">Description:</label>
            <textarea class="my-2" style="height: 150px" aria-label="With textarea" name="description" id="description">{{ $project->description }}</textarea>
        </div>

        <button type="submit" value="CREATE" class="btn btn-primary">UPDATE</button>
    </form>
@endsection
