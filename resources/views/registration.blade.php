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
        <label for="username" >Name</label>
        <input type="text" id="name" name="name" required>


        <label for="username" >Email Address</label>
        <input type="email" id="email" name="email" required>

        
        <label for="password">Password</label>
        <input type="text" id="password" name="password" required>

        <label for="role">Role</label>
        
        <select name="role" id="role" value="student">
            <option value="Student">Student</option>    
            <option value="Teacher">Teacher</option>    
            <option value="Instructor">Instructor</option>    
        </select>



        <input type="submit" value="Register">
    </form>

</div>
@endsection