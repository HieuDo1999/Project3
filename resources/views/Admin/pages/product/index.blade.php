@extends('Admin.master')
@section('title','Trang chủ')
@section('content')

  <div class="card mb-4">
    <div class="card-header">
      <!-- Example single danger button -->
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Danh mục sản phẩm
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

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Tên sản phẩm " aria-label="Search" aria-describedby="basic-addon2" />
          <div class="input-group-append">
            <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </div>
      </form>


      <a> <i class="fa fa-plus fa-2x" aria-hidden="true" style="color:green;">Thêm sản phẩm </i></a>
    </div>


    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Giá sản phẩm</th>
              <th>Số lượng</th>
              <th>Xóa</th>
              <th>Xem chi tiết</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Giá sản phẩm</th>
              <th>Số lượng</th>
              <th>Xóa</th>
              <th>Xem chi tiết</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>112</td>
              <td>Bánh mì</td>
              <td>12</td>
              <td>100</td>
              <th><i class="bi bi-trash-fill"></i></i></th>
              <th><i class="fa fa-eye" aria-hidden="true"></i></th>
            </tr>
            <tr>
              <td>112</td>
              <td>Bánh mì</td>
              <td>12</td>
              <td>100</td>
              <th><i class="fa fa-trash" aria-hidden="true"></i></th>
              <th><i class="fa fa-eye" aria-hidden="true"></i></th>
            </tr>


          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection()