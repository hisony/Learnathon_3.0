@extends('layout')  

@section('title', 'Registration')   <?php  //tab e title dekhabe  ?>


@include('header1')   <!-- header file er content eikhane add kora  -->


@section('txt1')
    <h1>Registration Form</h1>
@endsection

<!--section txt1 - e ja thakbe ta layout - yield txt1 receive korbe  -->



@section('main')
<div class="containerRegi">

    <form action="/add" method="POST">  <!-- routes/web.php er /add e jabe -->
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
            <option value="Admin">Admin</option>    
        </select>



        <input type="submit" value="Register">
    </form>

</div>
@endsection