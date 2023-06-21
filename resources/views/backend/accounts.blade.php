@extends('layouts.body')
@section('content')
    
    <div class="main-div">
        <!-- left side -->
        @include('backend.menu')

        <div class="right-side">
        <!-- product list -->
            <div class="product-list">
                <h2 class="product-title">Users Account</h2>
                <a href="{{url('create-user')}}" class="btn btn-dark add-new-btn">Add New <i class="fa-solid fa-plus"></i></a>
             <div class="search-box ">
             </div>
             <div class="search-by-type">
                <select name="" id="" class="form-select">
                    <option selected disabled>Search By Type</option>
                    <option value="">Admin</option>
                    <option value="">Author</option>
                    <option value="">User</option>
                </select>
             </div>
             <table class="table table-striped">
                <tr>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td> <img src="img/download.png" alt="" class="p-img">
                    </td>
                    <td>Zaman</td>
                    <td>Admin</td>
                    <td>555555</td>
                    <td>adorzaman18@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td> <img src="img/download.png" alt="" class="p-img">
                    </td>
                    <td>Salma</td>
                    <td>Author</td>
                    <td>555555</td>
                    <td>adorzaman18@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>03</td>
                    <td> <img src="img/download.png" alt="" class="p-img">
                    </td>
                    <td>Nafis</td>
                    <td>Author</td>
                    <td>555555</td>
                    <td>adorzaman18@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>04</td>
                    <td> <img src="img/download.png" alt="" class="p-img">
                    </td>
                    <td>Sabbir</td>
                    <td>User</td>
                    <td>555555</td>
                    <td>adorzaman18@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>05</td>
                    <td> <img src="img/download.png" alt="" class="p-img">
                    </td>
                    <td>Rahman</td>
                    <td>User</td>
                    <td>555555</td>
                    <td>adorzaman18@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>06</td>
                    <td> <img src="img/download.png" alt="" class="p-img">
                    </td>
                    <td>ador</td>
                    <td>User</td>
                    <td>555555</td>
                    <td>adorzaman18@gmail.com</td>
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