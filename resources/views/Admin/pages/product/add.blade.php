@extends('Admin.master')
@section('title','Trang chủ')
@section('content')
<div class="card mb-4">
  <div class="card-header mb-2">
      <form form action="{{route('product.viewProductByName')}}" method="post">
        @csrf
        <div>
        <input class="form-control mr-sm-2" type="text" placeholder="Tên sản phẩm" aria-label="Search" name="name">
        </div>
        <div>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </div>
          </form>


 
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
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Thêm</button>
      </div>
    </div>
    </form>
  </div>

</div>

@endsection()