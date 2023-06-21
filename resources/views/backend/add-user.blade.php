@extends('layouts.body')
@section('content')
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')
        <div class="right-side">
            <h2>Create New Account</h2>
            <div class="add-product-box">
                <form action="" class="row">
                    <div class="col-lg-12">
                        <input type="text" placeholder="User Name" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Phone Number" class="form-control my-2">
                        <input type="text" placeholder="Email address" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Address" class="form-control my-2">
                        <input type="text" placeholder="Password" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <textarea name="" id="" cols="30" rows="10" class="form-control my-2">User details</textarea>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Profile Image</label>
                        <input type="file" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <label for=""> </label>
                        <select name="" id="" class="form-select my-2">
                            <option selected disabled>User Type</option>
                            <option value="">Admin</option>
                            <option value="">Author</option>
                            <option value="">User</option>
                        </select>
                    </div>
                    
                    <div class="col-lg-12">
                        <input type="submit" value="Add User" class="form-control btn btn-dark">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

@endsection()