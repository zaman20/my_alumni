@extends('layouts.body')
@section('content')

    @include('layouts.header')
    
    <div class="main-content">
                <div class="login-box">
                    <h2>Register Account</h2>
                    <form action="/register-user" method="POST" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <input type="text" name="name" placeholder="User Name" class="form-control my-2">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="phone" placeholder="Phone Number" class="form-control my-2">
                            <input type="text" name="email" placeholder="Email address" class="form-control my-2">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="address" placeholder="Address" class="form-control my-2">
                            <input type="text" name="password" placeholder="Password" class="form-control my-2">
                        </div>
                        
                        <div class="col-lg-12">
                            <textarea name="details" id="" cols="30" rows="10" class="form-control my-2">User details</textarea>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="st_id" placeholder="Student ID" class="form-control my-2">
                            <label for="">Profile Image</label>
                            <input type="file" name="pImage" class="form-control my-2">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="session" placeholder="Session" class="form-control my-2">
                            <label for="">Your Working Organization</label>
                            <input type="text" name="organization" placeholder="Organization Name" class="form-control my-2">
                        </div>
                        
                        <div class="col-lg-12">
                            <input type="submit" value="Add User" class="form-control btn btn-dark">
                        </div>
                    </form>

                </div>
                @if(session()->has('msg'))
                    <p class="alert alert-success">{{session('msg')}}</p>
                @endif
    </div>

    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')

@endsection()
