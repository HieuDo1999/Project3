@extends('Customer.master')
@section('title','Trang chủ')


@section('content')
<div>

<div class="container">

    <div class="row">

        <div class="col-lg-3">

           @include('Customer.components.sidebar')

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <!-- carousel slide -->

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/slider6.jpg') }}" class="d-block w-100" alt="ảnh 1" style="width: 1000px ;height: 700px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/slider5.jpg') }}" class="d-block w-100" alt="anh 2" style="width: 1000px ;height: 700px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/slider4.jpg') }}" class="d-block w-100" alt="anh 3" style="width: 1000px ;height: 700px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <hr />
            <!-- card -->
            <div class="row row-cols-1 row-cols-md-3">
            @foreach($product as $pro)
                <form action="{{route('cart.addToCart')}}" method="post">
                @csrf
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ asset('img/'.$pro->image )}}" class="card-img-top" alt="/" style="height: 200px;">
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
    <!-- /.col-lg-9 -->

</div>
<!-- /.row -->


</div>
@endsection()