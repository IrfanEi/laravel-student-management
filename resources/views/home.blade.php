<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<body>
    <h1>Main Page</h1>
    <ul>
        <li><a href="{{ route('students.create') }}">Create Student</a></li>
        <li><a href="{{ route('students.index') }}">Update/View Students</a></li>
        <li><a href="{{ route('courses.create') }}">Create Course</a></li>
        <li><a href="{{ route('courses.index') }}">Update/View Courses</a></li>
    </ul>
</body>
</html>
