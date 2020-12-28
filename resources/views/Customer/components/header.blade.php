<!-- header -->

<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
    <div class="container">
        <img src="{{ asset('img/RAY1.png') }}" alt="" style="width: 50px;height: 50px;">
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home.index')}}">Trang chủ <span class="sr-only">(current)</span></a>
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
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search" name="keyword_tensanpham">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="pages/cart.html">Giỏ hàng</a>
            </li>
            <li class="nav-item text-nowrap">
                <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                <a class="nav-link" href="{{route('user.getLogin')}}">Đăng nhập</a>
            </li>
        </ul>
    </div>
</nav>
<!-- end header -->
