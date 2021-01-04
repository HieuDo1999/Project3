@extends('Customer.master')
@section('title','Trang chủ')


@section('content')
<main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container ">
            <form class="needs-validation" name="frmthanhtoan" method="post"
                action="{{route('placeOrder.PlaceOrder')}}">
                @csrf
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thông tin vận chuyển</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill">2</span>
                        </h4>
                        <ul class="list-group mb-3">
                        @if(session('cart')!=null)
                            @foreach($product as $pro)
                            <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                            <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                            <input type="hidden" name="sanphamgiohang[1][soluong]" value="2">

                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><img src="{{ asset('img/'.$pro['product']->image)}}" alt="" style="width: 70px;"></h6>
                                    <small class="text-muted">{{$pro['product']->price." "."VND"}} x {{$pro['quantity']}}</small>
                                </div>
                                <span class="text-muted">{{$pro['product']->price*$pro['quantity']." "."VND"}}</span>
                            </li>
                            @endforeach
                            @endif
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <strong>{{$newCart->totalPrice." "."VND"}}</strong>
                            </li>
                        </ul>


                        

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="nem">Họ tên</label>
                                <input type="text" class="form-control" name="name" id="kh_ten"
                                    value="" >
                            </div>
                            
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" id="kh_diachi"
                                    value="" >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="phone" id="kh_dienthoai"
                                    value="" >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Email</label>
                                <input type="text" class="form-control" name="email" id="kh_dienthoai"
                                    value="" >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Ghi chú</label>
                                <input type="text" class="form-control" name="note" id="kh_dienthoai"
                                    value="" >
                            </div>
                           
                            
                           
                        </div>

                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3" name="">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="method" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="method" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Thanh toán online</label>
                            </div>
                            
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt hàng</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>
    

@endsection()