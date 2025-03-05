@extends('layout')

@section('title', 'Login')


@include('header1')


@section('txt1')
    <h1>Login Form</h1>
@endsection



@section('main')
<div class="containerLogin">

    <form action="/logged" method="post">
        @csrf
        <label for="username" >Email Address</label>
        <input type="email" id="email" name="email" required> 
        
        
        <label for="password">Password</label>
        <input type="text" id="password" name="password" required>
        
        <input type="submit" value="Login">
    </form>

</div>
@endsection

@if (session('error'))
    <p style="color: red; font-size: 30px; text-align: center; font-weight: bold; background-color: rgba(185, 178, 178, 0.813)
    ;">{{ session('error') }}</p>
@endif