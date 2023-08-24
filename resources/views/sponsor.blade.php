@extends('layouts.body')
@section('content')
    @include('layouts.header')

    <div class="container">>
        <div class="members-area">
            <h2>Sponsors & Donors</h2>
            <div class="member-box">
                    <img src="/img/coderr.png" alt="">
            </div>
            <div class="member-box">
                    <img src="/img/bkashpng.png" alt="">
            </div>
            <div class="member-box">
                    <img src="/img/nagad.png" alt="">
            </div>
            <div class="member-box">
                    <img src="/img/kfc.png" alt="">
            </div>
        </div>
    </div>
    <!-- footer -->
    @include('layouts.footer')
    @include('layouts.linkjs')
    @include('layouts.myjs')
@endsection()