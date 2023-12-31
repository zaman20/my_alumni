@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')

        <div class="right-side">
            <h2>Add New Post</h2>
            @if(session()->has('msg'))
                <h6 class="notice">{{session('msg')}}</h6>
            @endif
            <div class="add-product-box">
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
                       <input type="hidden" value="admin" name="created_by">
                       <input type="hidden" value="1" name="status">
                    </div>
                    
                    <div class="col-lg-12">
                        <!-- <label for="">Post Image</label> -->
                        <!-- <input type="file" name="image" class="form-control my-2"> -->
                        <input type="submit" value="Create Post" class="form-control btn btn-dark">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

@endsection()