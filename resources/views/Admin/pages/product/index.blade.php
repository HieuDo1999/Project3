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


    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Giá sản phẩm</th>
              <th>Ảnh</th>
              <th>Xóa</th>
              <th>Xem chi tiết</th>
            </tr>
          </thead>
         
          <tbody>
            @foreach($product as $pro)
            <tr>
              <td>{{$pro->id}}</td>
              <td>{{$pro->name}}</td>
              <td>{{$pro->price}}</td>
              <td><img src="{{ asset('img/'.$pro->image )}}" alt="" style="width: 100px;"></td>
              <th><a href="{{route('product.delete',$pro->id)}}"><button >Xoa</button></a></th>
              <th><a href="{{route('product.getProductDetail',$pro->id)}}"><button>Xem chi tiet</button></a></th>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection()