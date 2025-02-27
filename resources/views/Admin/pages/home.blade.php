@extends('Admin.master')
@section('title','Trang chủ')   
@section('content') 
<div class="card mb-4">
                            <div class="card-header">
                            <i class="fa fa-list" aria-hidden="true"></i>
                                Danh sách đơn hàng
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Mã đơn</th>
                                                <th>Mã khách hàng</th>
                                                <th>Số lượng</th>
                                                <th>Tổng giá</th>
                                                <th>Ghi chú</th>
                                                <th>Ngày đặt</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($bills as $bill)
                                            <tr>
                                                <td>{{$bill->id}}</td>
                                                <td>{{$bill->customer_id}}</td>
                                                <td>{{$bill->quantity}}</td>
                                                <td>{{$bill->total}}</td>
                                                <td>{{$bill->note}}</td>
                                                <td>{{$bill->date}}</td>
                                                <td>{{$bill->address}}</td>
                                                <td>{{$bill->phone}}</td>
                                                <td><a href="{{route('bill.detail',$bill->id)}}">Chi tiết</a></td>
                                            </tr>
                                        @endforeach   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

  @endsection()