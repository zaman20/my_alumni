@extends('layouts.body')
@section('content')
    @include('layouts.header')

    <div class="container">
    <div class="search-area">
                    <form action="/search-member" method="POST" class="row">
                        @csrf
                        <div class="col-lg-7">
                            <input type="text" name="name" placeholder="Search By Name" class="form-control my-2">
                        </div>
                        <div class="col-lg-5">
                            <input type="submit" value="Search Now" class="form-control btn btn-dark my-2">
                        </div>
                        
                       
                    </form>
                </div>
                <div class="members-area">
                    <h2>Alumni Members</h2>
                    @foreach($datas as $data)
                        <div class="member-box">
                            @if(($data->image))
                            <img src="{{$data->image}}" alt="">
                            @else
                            <img src="/img/download.png" alt="">
                            @endif
                            <h3>{{$data->name}}</h3>
                            <p>{{$data->organization}}</p>
                            <p>{{$data->phone}}</p>
                            <a href="" class="btn btn-info">Session: {{$data->session}}</a>
                        </div>
                    @endforeach
                   
                </div>
    </div>
    <!-- footer -->
    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')
@endsection()