@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Student</h1>

        <form id="create-student-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <!-- Add other student fields as needed -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <script>
        // Handle form submission
        document.getElementById('create-student-form').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form data
            var name = document.getElementById('name').value;

            // Create student object
            var student = {
                name: name
                // Add other student properties as needed
            };

            // Make API request to create a new student
            fetch('/students', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(student)
            })
            .then(response => response.json())
            .then(data => {
                // Handle response
                if (data.success) {
                    // Student created successfully
                    alert('Student created successfully');
                    window.location.href = '/students';
                } else {
                    // Student creation failed
                    alert('Failed to create student');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
@endsection
