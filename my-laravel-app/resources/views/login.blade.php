@extends('layout')
<!-- resources/views/login.blade.php -->
@section('title', 'Retro Wave Login')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Log in</h1>
        <form id="login-form">
            <input type="email" placeholder="Email" id="email" required>
            <input type="password" placeholder="Password" id="password" required>
            <button type="submit">Log in</button>
        </form>
        <a href="/register"><p>Don't you have an account?</p></a>
    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>
@endsection
