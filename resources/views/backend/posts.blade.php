@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')
        <div class="right-side">
        <!-- post list -->
            <div class="product-list">
                <h2 class="product-title">All Post</h2>
                <a href="{{url('create-post')}}" class="btn btn-dark add-new-btn">Add New <i class="fa-solid fa-plus"></i></a>
             <div class="search-box">
                <form action="">
                    <input type="text" placeholder="Search Here" class="search-text form-control">
                    <input type="submit" value="Search" class="search-btn">
                </form>
             </div>
             <div class="search-by-type">
                <select name="" id="" class="form-select">
                    <option selected disabled>Search By Type</option>
                    <option value="">T-shirts</option>
                    <option value="">Cloths</option>
                    <option value="">Medicine</option>
                    <option value="">Gadgets</option>
                </select>
             </div>
             <table class="table table-striped">
                <tr>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td> <img src="img/16.avif" alt="" class="p-img">
                    </td>
                    <td>Men's Sport</td>
                    <td>Zaman</td>
                    <td>News</td>
                    <td>2-6-23</td>
                    <td>
                        <a href="#" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>02</td>
                    <td> <img src="img/download (1).jpg" alt="" class="p-img">
                    </td>
                    <td>Men's Events</td>
                    <td>Utso</td>
                    <td>Event</td>
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