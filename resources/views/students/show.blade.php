<!-- resources/views/students/show.blade.php -->
@extends('layout')

@section('content')
    <h2>Student Details</h2>
    <table class="table mt-4">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $student->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $student->name }}</td>
            </tr>
        </tbody>
    </table>

    <h3>Courses</h3>
    <div>
        <a href="{{ route('students.courses.create', $student) }}" class="btn btn-success">Add Course</a>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Course Score</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($student->courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_score }}</td>
                    <td>
                        <a href="{{ route('students.courses.edit', [$student, $course]) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('students.courses.destroy', [$student, $course]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
