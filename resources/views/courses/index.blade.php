@extends('layouts.app')

@section('content')
    <h1>Courses</h1>

    <a href="{{ route('courses.create') }}" class="btn btn-primary">Create Course</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
