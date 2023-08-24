@extends('layouts.body')
@section('content')
    @include('layouts.header')

    <div class="container">>
        <div class="members-area">
            <h2>Photo Gallery</h2>
            <div class="member-box">
                <img src="/img/download (1).jpg" alt="">
            </div>
            <div class="member-box">
                <img src="/img/download (2).jpg" alt="">
            </div>
            <div class="member-box">
                <img src="/img/download (3).jpg" alt="">
            </div>
            <div class="member-box">
                <img src="/img/d.jpg" alt="">
            </div>

        </div>
    </div>
    <!-- footer -->
    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')
@endsection()