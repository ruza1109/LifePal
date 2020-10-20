@extends('layouts.app')

@section('title','Login Page')

@section('content')
    <div class="login-page flex justify-center items-center">
        <div class="login-container">
            <div class="login-title flex justify-center items-center text-bold">
                Life Pal
            </div>
            <div class="login-subtitle flex justify-center items-center flex-wrap">
                <span class="text-center">Welcome to your life assistant application, </span>
                <span class="text-center text-bold font-italic font-big font-family-impact letter-spacing-3"> your Life Pal.</span>
            </div>
            <div class="login-form flex justify-center flex-column">

                <h3 class="text-center"> Log in and keep things under control </h3>
                <div class="form-input p-1 flex justify-center">
                    <input type="text" name="email" placeholder="Type your email" class="radius-1">
                </div>

                <div class="form-input p-1 flex justify-center">
                    <input type="password" name="password" placeholder="Type your password" class="radius-1">
                </div>

                <div class="form-input p-1 flex justify-center">
                    <input type="submit" value="Log in">
                </div>
            </div>
        </div>
    </div>
@endsection
