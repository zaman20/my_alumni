@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')
        <div class="right-side">
        <!-- post list -->
            <div class="product-list">
                <h2 class="product-title">All Message</h2>
           
             <table class="table table-striped">
                <tr>
                    <th>SL</th>
                    <th>Subject</th>
                    <th>Sent By</th>
                    <th>Type</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Men's Sport</td>
                    <td>Zaman</td>
                    <td>News</td>
                    <td>aaa@gmail.com</td>
                    <td>2-6-23</td>
                    <td>
                        <a href="#" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Men's Events</td>
                    <td>Utso</td>
                    <td>Event</td>
                    <td>aaa@gmail.com</td>
                    <td>22-5-23</td>
                    <td>
                        <a href="#" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>

             </table>
            </div>
        </div>
    </div>

@endsection()