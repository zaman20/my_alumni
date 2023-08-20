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
                    <td> <img src="img/download.png" alt="" class="p-img">
                    </td>
                    <td>{{$data->name}}</td>
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
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach

             </table>
            </div>
        </div>
    </div>

@endsection()