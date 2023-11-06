@extends('layout')
<!-- resources/views/register.blade.php -->
@section('title', 'Retro Wave Registration')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" id="default-styles">
@endsection

@section('content')
    <div class="container">
        <h1>Registration</h1>
        <form id="registration-form">
            @csrf <!-- Вставьте CSRF-токен в форму -->
            <input type="text" placeholder="Full name" id="username" required>
            <input type="email" placeholder="Email" id="email" required>
            <input type="text" placeholder="Passport" id="passport" required>
            <button type="submit" id="register-button">Register</button>
        </form>
        <div id="password-container" class="hidden">
            <p id="password-result" class="generated-password"></p>
            <p>Your Password</p> <!-- Текст "Password" под сгенерированным паролем -->
            <button id="enter-button" class="hidden" onclick="window.location.href='/login'">Enter</button>
        </div>
        <a href="/login"><p>Already have an account</p></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('scripts')
<script src="{{ asset('js/register.js') }}"></script>
@endsection