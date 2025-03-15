@extends('layout')

@section('title', 'offered courses')


@include('headerStudent')


@section('txt1')
    <h1>Welcome To Student dashboard</h1>
@endsection

@section('main')

<div class="box1"> 
    <div class="container mt-4">
        <h2 class="mb-3">Offered Courses</h2>
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
                        <button class="btn btn-warning">Register</button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection