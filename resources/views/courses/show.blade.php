@extends('layouts.app')

@section('content')
    <h1>Course Details</h1>

    <p><strong>Name:</strong> {{ $course->name }}</p>
    <!-- Display other course details as needed -->

    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>

    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
