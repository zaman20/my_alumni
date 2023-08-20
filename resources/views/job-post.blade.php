@extends('layouts.body')
@section('content')

    @include('layouts.header')
    
    <div class="login-box">
        <h2>CSE ALUMNI ASSOCIATION</h2>
        <form action="/add-post" method="post" enctype="multipart/form-data" class="row">
                    @csrf
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Title" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <textarea name="description" id="" cols="30" rows="10" class="form-control my-2">Post Description</textarea>
                    </div>
                    <div class="col-lg-6">
                        <select name="type" id="" class="form-select my-2">
                            <option selected disabled>Post Type</option>
                            <option value="1">News</option>
                            <option value="2">Events</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                       <p class="my-2">Created By: Zaman</p>
                       <input type="hidden" value="zaman" name="created_by">
                       <input type="hidden" value="0" name="status">
                    </div>
                    
                    <div class="col-lg-12">
                        <!-- <label for="">Post Image</label> -->
                        <!-- <input type="file" name="image" class="form-control my-2"> -->
                        <input type="submit" value="Create Post" class="form-control btn btn-dark">
                    </div>
                   
                </form>

        @if(session()->has('msg'))
            <p class="alert alert-danger my-2">{{session('msg')}}</p>
        @endif

    </div>
    

    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')

@endsection()
