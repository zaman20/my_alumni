@extends('layouts.body')
@section('content')
    @include('layouts.header')

    <!-- slider -->
    <div class="slider-area content-wrapper">
        <div class="owl-carousel">
            <div> <img src="img/hstu_main_gate.jpg" alt=""> </div>
            <div> <img src="img/33.jpg" alt=""> </div>
            <div> <img src="img/hstu_main_gate.jpg" alt=""> </div>
          </div>
    </div>
    <!-- news part -->
    <div class="news content-wrapper">
        <h2 class="news-title">Jobs Circular</h2>
        @foreach($jobs as $post)
            <div class="news-content">
                <h3>{{$post->title}}</h3>
                <p>{{$post->description}}</p>
                <a href="{{url('post-single/'.$post->id)}}"  class="btn btn-primary">Read More >></a>
            </div>
        @endforeach
    </div>

  

   
    
    <!-- footer -->
    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')

@endsection()