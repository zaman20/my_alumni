@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')

        <div class="right-side">
            <h2>Add New Post</h2>
            @if(session()->has('msg'))
            <div class="notice">
                <h6>{{session('msg')}}</h6>
            </div>
            @endif
            <div class="add-product-box">
                <form action="/edit-post-submit" method="post" enctype="multipart/form-data" class="row">
                    @csrf
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Title" value="{{$data->title}}" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <textarea name="description" id="" cols="30" rows="10" class="form-control my-2">{{$data->description}}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <select name="type" id="" class="form-select my-2">
                            @if($data->type == 1)
                            <option value="1" selected>News</option>
                            <option value="2">Events</option>
                            @else
                            <option value="1" selected>News</option>
                            <option value="2" selected>Events</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-6">
                       <p class="my-2">Created By: Zaman</p>
                       <input type="hidden" value="{{$data->created_by}}" name="created_by">
                       <input type="hidden" value="{{$data->id}}" name="post_id">
                    </div>
                    
                    <div class="col-lg-12">
                        <!-- <label for="">Post Image</label> -->
                        <!-- <input type="file" name="image" class="form-control my-2"> -->
                        <input type="submit" value="Update Post" class="form-control btn btn-dark">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

@endsection()