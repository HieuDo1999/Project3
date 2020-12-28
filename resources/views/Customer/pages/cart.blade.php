@extends('Customer.master')
@section('title','Trang chủ')


@section('content')

<!-- cart -->

  <div class="container mt-3">
  <i class="fa fa-shopping-cart" aria-hidden="true" style="width: 100px; color: blue;">Giỏ hàng</i>
    <div class="row">
      <div class="col-md-9">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>Sản phẩm</th>
              <th>Giá tiền</th>
              <th>Số lượng</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="{{ asset('img/cu1.jpg')}}" alt="" style="width: 70px;"></td>
              <td scope="row">Bánh quy</td>
              <td>192VNĐ</td>
              <td><input aria-label="quantity" class="input-qty" max="100" min="1" name="" type="number" value="1"></td>
            </tr>
            <tr>
              <td><img src="{{ asset('img/cu1.jpg')}}" alt="" style="width: 70px;"></td>
              <td scope="row">Sữa tươi</td>
              <td>11000VND</td>
              <td><input aria-label="quantity" class="input-qty" max="100" min="1" name="" type="number" value="1"></td>
            </tr>
          </tbody>
        </table>

      </div>
      <dv class="col-md-3">
        <table class="table">
          <tbody>
            <tr>
              <td scope="row">Tạm tính</td>
              <td>Thành tiền</td>

            </tr>
            <tr>
              <td scope="row">1111VDN</td>
              <td>222VND</td>

            </tr>
          </tbody>
        </table>
        <button type="button" class="btn btn-danger" style="background-color: green;">Đặt hàng</button>

      </dv>
    </div>


  </div>
  @endsection()