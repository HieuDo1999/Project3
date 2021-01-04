@extends('Admin.master')
@section('title','Trang chủ')   
@section('content') 
<div class="card mb-4">
                            <div class="card-header">
                            <i class="fa fa-list" aria-hidden="true"></i>
                                Chi tiết đơn hàng
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Mã đơn</th>
                                                <th>Mã khách hàng</th>
                                                <th>Mã sản phẩm</th>
                                                <th>Sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                             
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($detail as $bill)
                                            <tr>
                                                <td>{{$bill->bill_id}}</td>
                                                <td>{{$bill->customer_id}}</td>
                                                <td>{{$bill->product_id}}</td>
                                                <td><img src="{{ asset('img/'.$bill->img )}}" alt="" style="width: 100px;"></td>
                                                <td>{{$bill->quantity}}</td>
                                                <td>{{$bill->price}}</td>
                                                
                                            </tr>
                                        @endforeach   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

  @endsection()