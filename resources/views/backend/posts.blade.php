@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')
        <div class="right-side">
        <!-- post list -->
            <div class="product-list">
                <h2 class="product-title">All Post</h2>
                @if(session()->has('msg'))
                    <h6 class="notice">{{session('msg')}}</h6>
                @endif
                <a href="{{url('create-post')}}" class="btn btn-dark add-new-btn">Add New <i class="fa-solid fa-plus"></i></a>
             <div class="search-box">
                <form action="">
                    <input type="text" placeholder="Search Here" class="search-text form-control">
                    <input type="submit" value="Search" class="search-btn">
                </form>
             </div>
             <div class="search-by-type">
                <select name="" id="" class="form-select">
                    <option selected disabled>Search By Type</option>
                    <option value="">News</option>
                    <option value="">events</option>
                </select>
             </div>
             <table class="table table-striped">
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_by}}</td>
                    @if($post->type == 1)
                    <td>News</td>
                    @else
                    <td>Events</td>
                    @endif
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a href="{{url('edit-post/'.$post->id)}}" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-danger dlt-btn" data-id="{{$post->id}}" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach

             </table>
            </div>
        </div>
    </div>
    <!-- form dlt================== -->
    <form action="/dlt-post" method="post" id="dltForm">
        @csrf
        <input type="hidden" value="" name="post_id" id="postId">
    </form>
    <!-- ===================== -->
    @include('layouts.linkjs')
    @include('layouts.myjs')
@endsection()