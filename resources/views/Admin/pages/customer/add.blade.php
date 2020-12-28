@extends('Admin.master')
@section('title','Trang chủ')
@section('content')
<div class="card mb-4">
  <div class="card-header">
    <!-- Example single danger button -->
    <div class="btn-group">
      <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Danh sách khách hàng
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Separated link</a></li>
      </ul>
    </div>
    <a href="{{ route('customer.getListCustomer')}}">Danh sach khach hang</a>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Tên sản phẩm " aria-label="Search" aria-describedby="basic-addon2" />
        <div class="input-group-append">
          <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
      </div>
    </form>


    <a href=""> <i class="fa fa-plus fa-2x" aria-hidden="true" style="color:green;">Thêm khách hàng </i></a>
  </div>
  <form action="{{route('customer.postAddCustomer')}}" method="post">
    @csrf
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Username</th>
              <th>Password</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>role</th>
              <th>Phone</th>

            </tr>
          </thead>

          <tbody>
            <tr>
              <th><input type="text" name="username"></th>
              <td><input type="text" name="password"></td>
              <td><input type="text" name="name"></td>
              <td><input type="text" name="email"></td>
              <td><input type="text" name="address"></td>
              <td><input type="text" name="role"></td>
              <td><input type="text" name="phone"></td>

            </tr>


          </tbody>
        </table>
        <div>
          <button type="submit" style="background-color: green;color: yellow;">Thêm </button>
        </div>
      </div>
    </div>
  </form>

</div>

@endsection()