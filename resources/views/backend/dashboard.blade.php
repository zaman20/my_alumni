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
                <p>1222</p>
                </div>
                <div class="box">
                <h3>Total Members</h3>
                <p>3000000</p>
                </div>
                <div class="box">
                <h3>Events</h3>
                <p>200000</p>
                </div>
                <div class="box">
                <h3>News</h3>
                <p>4500</p>
                </div>
            </div>

           
        </div>
   </div>


@endsection()