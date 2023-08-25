@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')
        <div class="right-side">
        <!-- post list -->
            <div class="product-list">
                <h2 class="product-title">Message:</h2>
                <div class="login-box">
                    
                    <p>
                        From: {{$data->name}} <br>
                        Subj: {{$data->subject}} <br>
                        Phone: {{$data->phone}}
                    </p> 
                    <p> Details: <br>
                        {{$data->message}}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection()