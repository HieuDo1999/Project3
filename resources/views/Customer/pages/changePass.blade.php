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
    
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-group">
                        <script language="javascript">
                        function validateChange(){
                            if( document.Change.oldPass.value == "" ) {
                                alert( "Bạn cần nhập mật khẩu cũ" );
                                document.Change.oldPass.focus() ;
                                return false;
                            }
                            if( document.Change.newPass.value == "" ) {
                                alert( "Bạn cần nhập mật khẩu mới" );
                                document.Change.newPass.focus() ;
                                return false;
                            }
                            if( document.Change.newPass.value !=  document.Change.newPassAgain.value) {
                                alert( "Mật khẩu không trùng" );
                                document.Change.newPass.focus() ;
                                return false;
                            }
                            
                            return( true );

                        }
                    </script>
                  
                            <form action="{{route('user.postChangePassWord')}}" method="post" name="Change" onsubmit = "return validateChange();">
                            @csrf
                            <div class="card p-4">
                                <div class="card-body">
                                    <h1>Đổi mật khẩu</h1>

                                          
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-user"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="password" name="oldPass"
                                            placeholder="Mật khẩu cũ">
                                           
                                        <small style="color: red" class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                                   
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-lock"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="password" name="newPass"
                                            placeholder=" Mật khẩu mới">
                                            @if ($errors->first('password')) 
                                        <small style="color: red" class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
                                             @endif
                                    </div>
                                    
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-lock"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="password" name="newPassAgain"
                                            placeholder="Nhập lại mật khẩu mới">
                                            @if ($errors->first('password')) 
                                        <small style="color: red" class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
                                             @endif
                                    </div>
                                    <div class="row mb-6">
                                        <div class="col">
                                            <button class="btn btn-primary px-4" name="btnDangNhap" type="submit">Đổi mật khẩu</button>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
      
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