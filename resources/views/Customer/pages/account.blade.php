@extends('Customer.master')
@section('title','Trang chủ')


@section('content')
<main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container ">

                
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thông tin tài khoản</h2>
                   
                </div>

                <div class="row">
                <form action="{{route('user.update')}}" method="post">
                @csrf
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>
                      
                        <div class="row">
                            <div class="col-md-12">
                                <label for="nem">Họ tên</label>
                                <input type="text" class="form-control" name="name" id="kh_ten"
                                    value="{{$user->name}}" >
                            </div>
                            
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" id="kh_diachi"
                                    value="{{$user->address}}" >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="phone" id="kh_dienthoai"
                                    value="{{$user->phone}}" >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Email</label>
                                <input type="text" class="form-control" name="email" id="kh_dienthoai"
                                    value="{{$user->email}}" >
                            </div>
                            
                        </div>
                   
                        <hr class="mb-4">
                        <div>
                        <button type="submit">Cập nhật</button>
                        <a href="{{route('user.changePass')}}">Đổi mật khẩu </a>
                        </div>
                    </div>
                    </form>
                </div>
           

        </div>
        <!-- End block content -->
    </main>
    

@endsection()