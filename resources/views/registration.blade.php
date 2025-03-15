@extends('layout')
@section('title', 'Registration')
@include('header1')

@section('txt1')
    <h1>Registration Form</h1>
@endsection

@section('main')
<div class="containerRegi">
    <form action="/add" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required>
        
        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="Student">Student</option>    
            <option value="Teacher">Teacher</option>    
            <option value="Admin">Admin</option>    
        </select>
        
        <input type="submit" value="Register">
    </form>
</div>
@endsection
