@extends('layout')

@section('title', 'admin')


@include('headerAdmin')


@section('txt1')
    <h1>Welcome To Admin Dashboard</h1>
@endsection

@section('main')

<div class="box1"> 
    <h1>Add a New Course</h1>
    <hr>
    <form action="/addCourse" method="post">
        @csrf
        <label for="course_name">Course Name:</label>
        <input type="text" id="course_name" name="course_name" required>
        
        <label for="time_slot">Time Slot:</label>
        <select id="time_slot" name="time_slot" required>
            <option value="02 PM to 04 PM">02 PM to 04 PM</option>
            <option value="10 AM to 12 PM">10 AM to 12 PM</option>
            <option value="12 PM to 02 PM">12 PM to 02 PM</option>
        </select>
        
        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" min="1" required>
        
        <label for="faculty_name">Faculty Name:</label>
        <select id="faculty_name" name="faculty_name" required>
            <option value="Kamruzzaman Sony">Kamruzzaman Sony</option>
            <option value="Rongon Kumar Shaha">Rongon Kumar Shaha</option>
            <option value="Sayed Arifin Omi">Sayed Arifin Omi</option>
        </select>
        
        <input type="submit" value="Add Course">
    </form>
</div>
    
@endsection