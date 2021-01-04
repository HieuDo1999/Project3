<!doctype html>
<html lang="en">

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

<main role="main">
<script language="javascript">
                        function validateRegister(){
                            if( document.frmdangky.email.value =="") {
                                alert( "Bạn cần nhập email" );
                                document.frmdangky.email.focus() ;
                                return false;
                            }
                            if( document.frmdangky.password.value == "" ) {
                                alert( "Bạn cần nhập mật khẩu " );
                                document.frmdangky.password.focus() ;
                                return false;
                            }
                            if( document.frmdangky.repassword.value == "" ) {
                                alert( "Bạn cần nhập mật khẩu xác thực" );
                                document.frmdangky.repassword.focus() ;
                                return false;
                            }
                            if( document.frmdangky.repassword.value != document.frmdangky.password.value ) {
                                alert( "Mật khẩu không trùng" );
                                document.frmdangky.repassword.focus() ;
                                return false;
                            }
                            if( document.frmdangky.name.value =="" ) {
                                alert( "Bạn cần nhập tên" );
                                document.frmdangky.name.focus() ;
                                return false;
                            }
                            if( document.frmdangky.address.value ==  "") {
                                alert( "Bạn cần nhập địa chỉ" );
                                document.frmdangky.newPass.focus() ;
                                return false;
                            }
                            if( document.frmdangky.phone.value ==  "") {
                                alert( "Bạn cần nhập số điện thoại" );
                                document.frmdangky.phone.focus() ;
                                return false;
                            }
                            
                            return( true );

                        }
                    </script>
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <form name="frmdangky" id="frmdangky" method="post" action="{{route('user.postRegister')}}" onsubmit = "return validateRegister();">
            @csrf
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mx-4">
                            <div class="card-body p-4">
                                <h1>Đăng ký</h1>
                                
                                <p class="text-muted">Tạo tài khoản</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="email" placeholder="Email" name="email">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" placeholder="Password"
                                        name="password">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" placeholder="Repassword" name="repassword">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Name" name="name">
                                </div>
                               
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Address" name="address">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Phone"
                                        name="phone">
                                </div>
                                
                                
                                
                                <button type="submit"  class="btn btn-block btn-success" name="btnDangKy">Tạo tài khoản</button>
                            </div>
                            <div class="card-footer p-4">
                                <div class="row">
                                    <div class="col-12">
                                        <center>Nếu bạn đã có Tài khoản, xin mời Đăng nhập</center>
                                        <a class="btn btn-primary form-control"
                                            href="{{route('user.getLogin')}}">Đăng nhập</a>
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