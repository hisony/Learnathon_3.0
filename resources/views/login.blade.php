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
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        
        <input type="submit" value="Login">
    </form>
</div>
@endsection

@if (session('error'))
    <p class="error-message">{{ session('error') }}</p>
@endif
