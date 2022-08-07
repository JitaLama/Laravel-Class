@extends('site.template')
@section('meropage')
<div class="container1">
    <div class="cover"></div>
    <form action="#">
        <div class="form-content">
        <div class="login-form">
            <div class="title">Login</div>
            <div class="input-boxes">
                <div class="input-box">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
                </div>
                <div class="text"><a href="#">Forgot Password?</a></div>
                <div class=" button input-box">
                <input type="submit" value="Submit">
                </div>
                <div class="text">Don't have an account? <label for="">Signup now</label></div>
            </div>
        </div>

        <div class="signup-form">
            <div class="title">Signup</div>
            <div class="input-boxes">
                <div class="input-box">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
                </div>
                <div class=" button input-box">
                <input type="submit" value="Submit">
                </div>
                <div class="text">Already have an account? <label for="">Login now</label></div>
            </div>
        </div>
        </div>
    </form>
</div>
@stop