<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="https://nentang.vn">Quản trị</a>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Đơn hàng<span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="pages/products.html">Quản lý sản phẩm </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/about.html">Quản lý người dùng</a>
          </li>
          
        </ul>
       
      </div>
      <ul class="navbar-nav px-3">
        
        <li class="nav-item text-nowrap">
          <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
          <a class="nav-link" href="{{route('customer.getLogin')}}">Đăng xuất</a>
        </li>
      </ul>
    </div>
  </nav>
<!-- end header -->