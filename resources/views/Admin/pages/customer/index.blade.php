@extends('Admin.master')
@section('title','Trang chủ')
@section('content')


<div class="card mb-4">
    <div class="card-header">
        <i class="fa fa-list" aria-hidden="true"></i>
        Danh sách khách hàng
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Tên khách hàng" aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Role</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($customers as $cus)
                    <tr>
                        <td>{{$cus->username}}</td>
                        <td>{{$cus->password}}</td>
                        <td>{{$cus->name}}</td>
                        <td>{{$cus->email}}</td>
                        <td>{{$cus->address}}</td>
                        <td>{{$cus->phone}}</td>
                        <td>{{$cus->role}}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection()