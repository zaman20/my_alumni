@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')

        <div class="right-side">
            <h2>Add New Post</h2>
            <div class="add-product-box">
                <form action="" class="row">
                    <div class="col-lg-12">
                        <input type="text" placeholder="Title" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <textarea name="" id="" cols="30" rows="10" class="form-control my-2">Post Description</textarea>
                    </div>
                    <div class="col-lg-6">
                        <select name="" id="" class="form-select my-2">
                            <option selected disabled>Post Type</option>
                            <option value="">T-shirt</option>
                            <option value="">Mens</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                       <p class="my-2">Created By: Zaman</p>
                    </div>
                    
                    <div class="col-lg-12">
                        <label for="">Post Image</label>
                        <input type="file" class="form-control my-2">
                        <input type="submit" value="Create Post" class="form-control btn btn-dark">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

@endsection()