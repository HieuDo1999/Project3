@extends('Admin.master')
@section('title','Trang chủ')
@section('content')

  <div class="card mb-4">
    <div class="card-header">
     

      <form action="{{route('product.viewProductByName')}}" method="post">
        @csrf
        <input class="form-control mr-sm-2" type="text" placeholder="Tên sản phẩm" aria-label="Search" name="name">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
      </form>


     
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
              <th><a href="{{route('product.delete',$pro->id)}}" onclick="return confirm('Are you sure?');"><button >Xoa</button></a></th>
              <th><a href="{{route('product.getProductDetail',$pro->id)}}"><button>Xem chi tiet</button></a></th>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection()