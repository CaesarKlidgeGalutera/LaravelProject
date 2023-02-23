@extends('LandingPage.home')
@section('title')
    login
@endsection

@section('content')
    <div class="loginPage">
        <div class="loginPage--left">
            <div class="loginPage--left__content">
                <h1>Turn your dreams into reality</h1>
                <p>Be the person you always dreamed of!</p>
            </div>
        </div>
        <div class="loginPage--right">
            <div class="loginPage--right__content">
                <h2>Login</h2>
                <p>Welcome back! Please enter your details.</p>
                <div class="loginInfo">
                    <input type="text" name="studendID" placeholder="Student Id">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="pword" placeholder="Password">
                </div>
                <div class="retain">
                    <input type="checkbox" name="remember" id="rmmbr"> Remember me
                    <a href="forgot">Forgot Password</a>
                   
                </div>
                <button class="loginPage--left__btn">Log in</button>
                <div class="Create">
                    <p>Don't have an account? <a href="#"> Click here!</a> </p> 
                    
                </div>
            </div>
        </div>
    </div>
@endsection