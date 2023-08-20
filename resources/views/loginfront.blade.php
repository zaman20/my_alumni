@extends('layouts.body')
@section('content')

    @include('layouts.header')
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-box">
                    <h2>CSE ALUMNI ASSOCIATION</h2>
                    <form action="">
                        <label for="">User Name</label>
                        <input type="text" name="" id="" class="form-control my-2">
                        <label for="">Password</label>
                        <input type="password" name="" id="" class="form-control my-2">
                        <input type="submit" name="" id="" class="form-control my-2 btn btn-dark" value="Login">
                    </form>   
                    <a href="{{url('register')}}" class="btn btn-primary">Register Now</a> 
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')

@endsection()
