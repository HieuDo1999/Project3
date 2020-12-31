@extends('Admin.master')
@section('title','Trang chủ')
@section('content')
<div class="card mb-4">
  <div class="card-header">
  <form action="{{route('product.viewProductByName')}}" method="post">
        @csrf
        <div class="input-group">
          <input name="name" class="form-control" type="text" placeholder="Tên sản phẩm " aria-label="Search" aria-describedby="basic-addon2" />
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </div>
      </form>


    <a> <i class="fa fa-plus fa-2x" aria-hidden="true" style="color:green;">Thêm sản phẩm </i></a>
  </div>
  <form action="{{ route('product.postAdd')}}" method="post" enctype="multipart/form-data">
        @csrf
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá sản phẩm</th>
            <th>Mô tả</th>
          </tr>
        </thead>
        
        <tbody>
        
          <tr>
            <td><input name="product_id"></td>
            <td><input name="product_name"></td>
            <td><select name="category">
                @foreach($category as $cate)
                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                @endforeach
              </select></td>
            <td><input type="file" name="img" id="img"></td>
            <td><input name="price"></td>
            <td><input name="description"></td>
          </tr>

         
        </tbody>
        
      </table>
      <div>
        <button type="submit" style="background-color: green;color: yellow;">Thêm </button>
      </div>
    </div>
    </form>
  </div>

</div>

@endsection()