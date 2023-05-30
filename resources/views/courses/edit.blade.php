@extends('layouts.app')

@section('content')
    <h1>Edit Course</h1>

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}">
        </div>
        <!-- Update other course fields as needed -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
