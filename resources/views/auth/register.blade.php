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
                    <div class="card-body mt-5">
                        <h4 class="text-center">Registration</h4>
                        <div class="form">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name = "name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="mail">Email</label>
                                    <input type="email" name="email" id="mail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" class = "form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm password</label>
                                    <input type="password" name="password_confirmation" id="" class="form-control">
                                </div>
                                <button type="submit" class = "btn btn-success btn-block mt-2">Register</button><br><br>
                                <span><a href="{{route('login')}}">Already registered?</a></span> 
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection