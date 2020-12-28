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
<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="https://nentang.vn">Nền tảng</a>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://nentang.vn">Quản trị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/products.html">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/about.html">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/contact.html">Liên hệ</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0" method="get" action="pages/search.html">
                        <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search"
                            name="keyword_tensanpham">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="pages/cart.html">Giỏ hàng</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                        <a class="nav-link" href="pages/login.html">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </nav>
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
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-user"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="text" name="email"
                                            placeholder="Tên đăng nhập">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-lock"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Mật khẩu">
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