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
        @foreach($product as $pro)
        <form action="{{route('product.edit')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="border-collapse: collapse; ">
                    <thead>
                        <tr>
                            <th class="masp">Mã sản phẩm</th>
                            <th class="tensp">Tên sản phẩm</th>
                            <th class="imgSP">Ảnh</th>
                            <th class="category">Loại sản phẩm</th>
                            <th class="price">Giá sản phẩm</th>
                            <th class="category">Mô tả</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$pro->id}}</td>
                            <td><input type="text" value="{{$pro->name}}" name="name"></td>
                            <td><img name="imgold" class="imgsp" src="{{ asset('img/'.$pro->image)}}" alt="" value="{{$pro->image}}"></td>
                            <td><select name="category_id">
                                    <option value="{{$pro->category_id}}" select:selected >{{$pro->category_name}}</option>
                                    @foreach($category as $cate)
                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><input type="text" value="{{$pro->price}}" name="price"></td>
                            <td><input type="text" value="{{$pro->description}}" name="description"></td>
                            <td> <button type="submit" style="background-color: green;color: yellow;">Cập nhật</button></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                   
                </div>
            </div>
        </form>
        @endforeach

    </div>

</div>

@endsection()