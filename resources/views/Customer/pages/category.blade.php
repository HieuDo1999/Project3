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

            <div class="row row-cols-1 row-cols-md-2">
                @foreach($product as $pro)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('img/'.$pro->image )}}" class="card-img-top" alt="/" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">{{$pro->name}}</h5>
                            <h5 class="card-price">{{$pro->price}}</h5>
                            <div class="btn-group" role="group" aria-label="Basic example">

                               <a href="{{route('product.getProductDetail',$pro->id)}}"><button type="button" class="btn btn-secondary">Xem chi tiết</button></a> 
                                <button type="button" class="btn btn-secondary">Thêm vào giỏ</button>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>


</div>
@endsection()