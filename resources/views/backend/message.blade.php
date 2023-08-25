@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')
        <div class="right-side">
        <!-- post list -->
            <div class="product-list">
                <h2 class="product-title">All Message</h2>
                @if(session()->has('msg'))
                    <p class="alert alert-success">{{session('msg')}}</p>
                @endif
             <table class="table table-striped">
                <tr>
                    <th>SL</th>
                    <th>Subject</th>
                    <th>Sent By</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                @php $count = 0; @endphp
                @foreach($datas as $data)
                    @php $count ++; @endphp
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$data->subject}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                        <a href="{{url('/read-message/'.$data->id)}}" class="btn btn-light " title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger dlt-btn" data-id="{{$data->id}}" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
             

             </table>
            </div>
        </div>
    </div>
    <!-- ==================================================== -->
    <form action="/delete-message" method="POST" id="dltForm">
        @csrf
        <input type="hidden" val="" name="pId" id="postId"> 
    </form>

    <!-- ======================================================= -->

    @include('layouts.linkjs')
    @include('layouts.myjs')
@endsection()