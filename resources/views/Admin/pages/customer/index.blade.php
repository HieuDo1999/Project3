@extends('Admin.master')
@section('title','Trang chủ')
@section('content')


<div class="card mb-4">
    <div class="card-header">
        <i class="fa fa-list" aria-hidden="true"></i>
        Danh sách khách hàng
        
        <form action="{{route('user.viewUserByEmail')}}" method="post">
            @csrf
            <div class="input-group">              
                <input class="form-control" type="text" name="email" placeholder="Email" aria-label="Search" aria-describedby="basic-addon2" />          
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
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
                        <th>Email</th>  
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Role</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($user as $user)
                    <tr>
                     <td>{{$user->email}}</td>
                        
                        <td>{{$user->name}}</td>
                       
                        <td>{{$user->address}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->role}}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection()