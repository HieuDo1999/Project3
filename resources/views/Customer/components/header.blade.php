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
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Danh mục sản phẩm
                        </button>
                        <div class="dropdown-menu">
                            @foreach($category as $cate)
                            <a class="dropdown-item" href="{{route('product.getListProductByCategoryId',$cate->category_id)}}">{{$cate->category_name}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/about.html">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/contact.html">Liên hệ</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" method="post" action="{{route('product.viewProductByName')}}">
                @csrf
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search" name="name">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="pages/cart.html">Giỏ hàng</a>
                @if(session('cart'))
                <a>{{$cart->totalQty}}</a>
                @endif
            </li>
            @if(session('user'))
            <li class="nav-item text-nowrap">
                <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                <a class="nav-link" href="{{route('user.logout')}}">Đăng xuất</a>

            </li>
            @else

            <li class="nav-item text-nowrap">
                <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                <a class="nav-link" href="{{route('user.getLogin')}}">Đăng nhập</a>
            </li>
            @endif

        </ul>
    </div>
</nav>
<!-- end header -->