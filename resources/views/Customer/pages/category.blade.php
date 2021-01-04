@extends('Customer.master')
@section('title','Trang chủ')


@section('content')
<div>

    <div class="row">

        <div class="col-lg-2">
@include('Customer.components.sidebar')

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-10">


            <hr />

            <div>

            </div>
            <!-- card -->

            <div class="row row-cols-1 row-cols-md-4">
                @foreach($product as $pro)
                <form action="{{route('cart.addToCart')}}" method="post">
                @csrf
                <div class="col mb-3">
                    <div class="card">
                        <img src="{{ asset('img/'.$pro->image )}}" class="card-img-top" alt="/" style="width: 200px;height:200px;">
                        <div class="card-body">
                            <input name="product_id" type="hidden" value="{{$pro->id}}">
                            <input name="quantity" type="hidden" value="1">
                            <h5 class="card-title">{{$pro->name}}</h5>
                            <h5 class="card-price">{{$pro->price}}</h5>
                            <div class="btn-group" role="group" aria-label="Basic example">

                                <a href="{{route('product.getProductDetail',$pro->id)}}"><button type="button" class="btn btn-secondary">Xem chi tiết</button></a>
                                <button type="submit" class="btn btn-secondary">Thêm vào giỏ</button>

                            </div>

                        </div>
                    </div>
                </div>
                </form>
                @endforeach
            </div>

        </div>

    </div>


</div>
@endsection()