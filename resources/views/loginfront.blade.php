@extends('layouts.body')
@section('content')

    @include('layouts.header')
    
    <div class="login-box">
        <h2>CSE ALUMNI ASSOCIATION</h2>
        <form action="/check-login" method="POST">
            @csrf
            <label for="">User Name</label>
            <input type="text" name="user_name" id="" class="form-control my-2">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control my-2">
            <input type="submit" class="form-control my-2 btn btn-dark" value="Login">
        </form>   
        <a href="{{url('register')}}" class="btn btn-primary">Register Now</a> 

        @if(session()->has('msg'))
            <p class="alert alert-danger my-2">{{session('msg')}}</p>
        @endif

    </div>
    

    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')

@endsection()
