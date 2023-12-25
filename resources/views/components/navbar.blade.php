<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/LandingPage.css') }}" >
    @vite('public/css/LandingPage.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    <title>Welcome | Freelancify</title>
</head>
<div class="navbar">
    <a href="{{'/'}}"><img src="{{ asset("images/nobg.png") }}" alt="Avatar Image"></a>
    <ul class="middleUl">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
    <ul>
        <li><a href="{{route('Register')}}" class="Register">Register</a></li>
        <li><a href="{{ route('login') }}" class="login">Login</a></li>
    </ul>
</div>
