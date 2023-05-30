@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Course</h1>

        <form id="create-course-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <!-- Add other course fields as needed -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <script>
        // Handle form submission
        document.getElementById('create-course-form').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form data
            var name = document.getElementById('name').value;

            // Create course object
            var course = {
                name: name
                // Add other course properties as needed
            };

            // Make API request to create a new course
            fetch('/courses', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(course)
            })
            .then(response => response.json())
            .then(data => {
                // Handle response
                if (data.success) {
                    // Course created successfully
                    alert('Course created successfully');
                    window.location.href = '/courses';
                } else {
                    // Course creation failed
                    alert('Failed to create course');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
@endsection
