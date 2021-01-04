@extends('Admin.master')
@section('title','Trang chủ')
@section('content')


<div class="card mb-4">
    <div class="card-header">
        <i class="fa fa-list" aria-hidden="true"></i>
    
        
        <form action="{{route('user.viewUserByEmail')}}" method="post">
            @csrf
            <input class="form-control mr-sm-2" type="text" placeholder="Email" aria-label="Search" name="email">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
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