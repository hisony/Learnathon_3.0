@extends('layout')

@section('title', 'teacher')


@include('headerAdmin')


@section('txt1')
    <h1>Welcome To Admin Dashboard</h1>
@endsection

@section('main')

<div class="box1"> 
    <div class="container mt-4">
        <h2 class="mb-3">Existing Courses</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-success">
                <tr>
                    <th>Course Name</th>
                    <th>Time Slot</th>
                    <th>Capacity</th>
                    <th>Faculty Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->slot }}</td>
                    <td>{{ $course->capacity }}</td>
                    <td>{{ $course->faculty }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection