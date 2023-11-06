@extends('layout')
<!-- resources/views/main.blade.php -->
@section('title', 'Retro Wave Account')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
    <div class="centered-container">
        <div class="account-container">
            <h1>Account</h1>
            <form id="main-form">
                <input type="text" placeholder="Full name" id="username" value="{{ Auth::user()->name }}" required>
                <input type="email" placeholder="Email" id="email" value="{{ Auth::user()->email }}" required>
                <input type="text" placeholder="Passport" id="passport" value="{{ Auth::user()->passport }}" required>
                <button type="submit" id="change-button">Change</button>
            </form>
            <a href="/logout"><p>Do you want to log out?</p></a>
        </div>
    </div>

    <!-- Большое текстовое поле внутри того же контейнера с надписью "About" и границей вокруг текстового поля -->
    <div class="account-container" id="about-container">
        <h1>About</h1>
        <textarea id="about-textarea" placeholder="Write something about yourself">{{ Auth::user()->about }}</textarea>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection
