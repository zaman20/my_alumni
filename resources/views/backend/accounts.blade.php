@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')

        <div class="right-side">
        <!-- product list -->
            <div class="product-list">
                <h2 class="product-title">Users Account</h2>
                <a href="{{url('create-user')}}" class="btn btn-dark add-new-btn">Add New <i class="fa-solid fa-plus"></i></a>
             <div class="search-box ">
                @if(session()->has('msg'))
                    <p class="alert alert-success">{{session('msg')}}</p>
                @endif
             </div>
             <div class="search-by-type">
                <select name="" id="" class="form-select">
                    <option selected disabled>Search By Type</option>
                    <option value="">Admin</option>
                    <option value="">Author</option>
                    <option value="">User</option>
                </select>
             </div>
            
             <table class="table table-striped">
                <tr>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Session</th>
                    <th>Student_ID</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Organization</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            @foreach($datas as $data)
                <tr>
                    <td>01</td>
                    <td>
                        @if($data->image)
                         <img src="{{$data->image}}" alt="" class="p-img">
                         @else
                         <img src="img/download.png" alt="" class="p-img">
                         @endif
                    </td>
                    <td>{{$data->name}} 
                        @if($data->status == 0)
                            <sub style="color:red;">Pending!</sub>
                        @endif
                    </td>
                    <td>{{$data->session}}</td>
                    <td>{{$data->student_id}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->organization}}</td>
                    @if($data->role == 0)
                        <td>User</td>
                    @else if($data->role == 1)
                        <td>Admin</td>
                    @endif
                    <td>
                        @if($data->status !=1)
                        <a href="#" class="btn btn-light approve-btn" data-id="{{$data->id}}" title="Approve"><i class="fa-solid fa-check"></i></a>
                        @endif
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach

             </table>
            </div>
        </div>
    </div>

   <!-- =========== for approve id collect form==================== -->
        <form action="/approve-member" method="POST" id="approveForm">
            @csrf
                <input type="hidden" value="" id="mID" name="mId">
        </form>

    <!-- =========================================================== -->

    @include('layouts.linkjs')
    @include('layouts.myjs')
@endsection()