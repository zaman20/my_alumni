<!DOCTYPE html>
<html lang="en">
@extends('layouts.body')
@section('content')
    
   <div class="main-div">
        <!-- left side -->
        @include('backend.menu')
        <!-- right side -->
        <div class="right-side">
            {{session('name')}}
            <div class="glance">
                <h2>At a Glance</h2>
                <div class="box">
                <h3>Total Post</h3>
                <p>{{$posts}}</p>
                </div>
                <div class="box">
                <h3>Total Members</h3>
                <p>{{$users}}</p>
                </div>
                <div class="box">
                <h3>Events</h3>
                <p>{{$events}}</p>
                </div>
                <div class="box">
                <h3>News</h3>
                <p>{{$news}}</p>
                </div>
            </div>

           
        </div>
   </div>


@endsection()