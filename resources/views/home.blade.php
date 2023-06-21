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
        <h2 class="news-title">News / Update</h2>
        @foreach($news as $post)
        <div class="news-content">
            <h3>{{$post->title}}</h3>
            <p>{{$post->description}}</p>
            <a href="{{url('post-single/'.$post->id)}}"  class="btn btn-primary">Read More >></a>
        </div>
        @endforeach
    </div>

    <!-- full area notice -->
    <div class="notice-area">
        <div class="notice-content">
            
            <h3><a href="">Ph.D Admissions 2019-20 (Starting from January 2023)</a> <span><img src="img/new.gif" alt="" class="img-fluid"></span></h3>
            <br>
            <p>
                <span>Extension of Tenure Of Present Vice Chancellor<img src="img/new.gif" alt="" class="img-fluid"></span>
                <span>Central University Of Punjab got 95th Rank in NIRF in 2023<img src="img/new.gif" alt="" class="img-fluid"></span>
                
            </p><br>
            <h3><a href="">International Student Admission</a> <span><img src="img/new.gif" alt="" class="img-fluid"></span></h3>
        </div>
    </div>

    <!-- event part -->
    <div class="news content-wrapper">
            <h2 class="news-title">Events</h2>
            @foreach($events as $post)
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
