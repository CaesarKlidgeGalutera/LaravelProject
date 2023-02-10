@extends('LandingPage.home')
@section('title')
    login
@endsection

@section('content')
    <div class="loginPage">
        <div class="loginPage--right">
            <h1>Turn your dreams into reality</h1>
            <p>Enroll Now!</p>
        </div>
        <div class="loginPage--left">
            <h1>Create an account</h1>
            <p>Enroll Now!</p>
            <hr>
            <input type="text" name="fname" placeholder="Firstname">
            <input type="text" name="sname" placeholder="Surname">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="pword" placeholder="Password">
            <button class="loginPage--left btn">Create account</button>

            <p>Already have an account? <a href="#"> Log in</a></p>
        </div>
    </div>
@endsection