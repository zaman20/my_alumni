@extends('layouts.body')
@section('content')

    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-2">
                <h3>Send your message to us!</h3>
                @if(session()->has('msg'))
                    <p class="alert alert-success">{{session('msg')}}</p>
                @endif
                <form action="/send-message" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control my-2" placeholder="Your Name">
                    <input type="text" name="phone" class="form-control my-2" placeholder="Your Phone">
                    <input type="text" name="email" class="form-control my-2" placeholder="Your Email">
                    <input type="text" name="subject" class="form-control my-2" placeholder="Subject">
                    <textarea name="msg" class="form-control my-2"  cols="30" rows="10">Message</textarea>
                    <input type="submit" value="Send Message" class="btn btn-dark my-2">
                </form>
            </div>
            <div class="col-lg-6 my-5 px-5">
               <h5 class="mt-3">Phone: 09999999</h5> 
                <h5>Email:contact@....</h5>
               <h5>Office:Room#240, M.A.Wazed Building, HSTU</h5> 
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection()