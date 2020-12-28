@extends('Customer.master')
@section('title','Trang chủ')


@section('content')
<!-- product -->
<div class="container mt-3">
    @foreach($product as $pro)
    <div class="row">
        <div class="col-md-4 col-sm-5">
            <div class="card">
                <img src="{{ asset('img/'.$pro->image)}}" class="card-img-top" alt="/" style="width: 100%;">
            </div>
        </div>
        <div class="col-md-8 col-sm-7">
            <div>
                <ul>Tên sản phẩm:{{$pro->name}}</ul>
                <ul>Giá sản phẩm:{{$pro->price}}</ul>
                <ul>{{$pro->description}}</ul>
                <ul>
                    <div class="buttons_added">
                        <a>Số lượng</a>
                        <input aria-label="quantity" class="input-qty" max="100" min="1" name="" type="number" value="1">
                    </div>
                </ul>
                <ul> <button type="button" class="btn btn-success">Thêm vào giỏ</button></ul>
            </div>
        </div>

    </div>
    @endforeach
</div>
@endsection()