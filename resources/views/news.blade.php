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
        <div class="news-content">
            <h3>Guest Lecture by Mr. Ashwin on topic Anti-Money Laundering</h3>
            <p>The event started with lightening of the lamp Dr. Shweta Sharma, Head Alumni along with Shiv Kumar Triatic, Head and..</p>
            <a href=""  class="btn btn-primary">Read More >></a>
        </div>
        <div class="news-content">
            <h3>Guest Lecture by Mr. Ashwin on topic Anti-Money Laundering</h3>
            <p>The event started with lightening of the lamp Dr. Shweta Sharma, Head Alumni along with Shiv Kumar Triatic, Head and..</p>
            <a href=""  class="btn btn-primary">Read More >></a>
        </div>
    </div>

  

   
    
    <!-- footer -->
    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')

@endsection()