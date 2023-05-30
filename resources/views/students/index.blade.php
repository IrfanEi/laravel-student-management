<!-- resources/views/students/index.blade.php -->
@extends('layout')

@section('content')
    <div>
        <a href="{{ route('students.create') }}" class="btn btn-success">Create Student</a>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>
                        <a href="{{ route('students.show', $student) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
