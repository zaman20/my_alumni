@extends('layouts.body')
@section('content')
    @include('layouts.header')

    <div class="content-area content-wrapper">
        <h3>{{$post->title}}</h3>
        <p>{{$post->description}}</p>
    </div>

    
    <!-- footer -->
    @include('layouts.footer')
@endsection()