<!doctype html>
<html lang="en">
<?php session_start(); ?>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet" />
    <!-- Font awesome -->
   
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/js/fontawesome.min.js')}}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}" type="text/css" rel="stylesheet" />
  
    <link rel="stylesheet" href="{{ asset('resources/css/app.css')}}" type="text/css" rel="stylesheet" />
</head>
<body>
 @include('Customer.components.header')
<main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <form name="frmdangnhap" id="frmdangnhap" method="post" action="{{route('user.postLogin')}}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-group">
                            <div class="card p-4">
                                <div class="card-body">
                                    <h1>Đăng nhập</h1>
                                    <p class="text-muted">Nhập thông tin Tài khoản</p>
                                        @if( count($errors)>0)
                                            @foreach($errors->all() as $er)
                                                <strong>{{$er}}</strong>
                                            @endforeach
                                        @endif    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-user"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="text" name="email"
                                            placeholder="Tên đăng nhập">
                                            @if ($errors->first('email')) 
                                        <small style="color: red" class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                                    @endif
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-lock"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Mật khẩu">
                                            @if ($errors->first('password')) 
                                        <small style="color: red" class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
                                    @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" name="btnDangNhap" type="submit">Đăng nhập</button>
                                        </div>
                                        <div class="col-6">
                                        <a href="{{route('customer.getRegister')}}">Dang ki </a>
                                      <button class="btn btn-primary px-4" name="btnDangKy">Đăng ký</button>
                                        </div>
                                        <div class="col-6 text-right">
                                            <button class="btn btn-link px-0" type="button">Quên mật khẩu?</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End block content -->
    </main>
    <!-- Liên kết Jquery -->
    <script src="{{ asset('vendor/jquery/jquery-3.4.1.min.js') }}"></script>

    <!-- Liên kết Bootstrap -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    <!-- js -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>