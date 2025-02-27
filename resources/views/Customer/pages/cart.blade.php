@extends('Customer.master')
@section('title','Trang chủ')


@section('content')



  <div class="container mt-3">
 
    <div class="row">
      <div class="col-md-9">
        <table class="table">
          <thead>
            <tr>
              <th>Hình ảnh</th>
              <th>Sản phẩm</th>
              <th>Giá tiền</th>
              <th>Số lượng</th>
              <th>Tổng tiền</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @if(session('cart')!=null)
            @foreach($product as $pro)
            <form action="{{route('cart.SaveCart')}}" method="post">
            @csrf
            <tr>
              <td><img src="{{ asset('img/'.$pro['product']->image)}}" alt="" style="width: 70px;"></td>
              <td scope="row">{{$pro['product']->name}}</td>
              <td>{{$pro['product']->price}}</td>
              <input type="hidden"  name="id" value="{{$pro['product']->id}}">
              <td><input aria-label="quantity" class="input-qty" max="100" min="1" name="quantity" type="number" value="{{$pro['quantity']}}"></td>
              <td>{{$pro['product']->price*$pro['quantity']." "."VND"}}</td>
              <td><button type="submit">Lưu</button></td>
              <td><a href="{{route('cart.removeProductCart',$pro['product']->id)}}" onclick="return confirm('Are you sure?');">Xóa</a></td>
              
              
            </tr>
            </form>
            @endforeach
            @endif
            
          </tbody>
        </table>

      </div>
      <dv class="col-md-3">
        <table class="table">
          <tbody>
            <tr>
              <td scope="row">Số lượng</td>
              <td>Thành tiền</td>

            </tr>
            <tr>
            @if(session('cart')!=null)
              <td scope="row">{{$newCart->totalQuantity}}</td>
              <td>{{$newCart->totalPrice." "."VND"}}</td>
              @endif

            </tr>
          </tbody>
        </table>
        @if(session('cart')!=null)
        <a href="{{route('placeOrder.deliveryForm')}}"><button type="button" class="btn btn-danger" style="background-color: green;">Đặt hàng</button></a>
        @endif
      </dv>
 
    </div>


  </div>
  @endsection()