@extends('layouts.template')
@php
    $show_hero = False;
@endphp
@section('title', 'Adlansing | Register')
@section('content')
    <div class="container">
        <div class="mt-5"></div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card m-5">
                    @include('components.auth-validation-errors')
                    <div class="card-body ">
                        <h4 class="text-center">Sign In</h4>
                        <div class="form">
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="mail">Email</label>
                                    <input type="email" name="email" id="mail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" class = "form-control">
                                </div>
                                <button type="submit" class = "btn btn-success btn-block mt-2">Login</button><br>
                                <span><a href="{{route('register')}}">Not registered?</a></span> 
                                <span><a href="{{route('password.request')}}">Forgot password?</a></span> 
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection