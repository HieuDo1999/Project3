<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{route('admin.home')}}">Quản trị</a>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.home')}}">Đơn hàng<span class="sr-only">(current)</span></a>
           
           
          </li>
          <li class="nav-item active">
          <a class="nav-link" href="{{route('user.index')}}">Danh sách người dùng<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
           <!-- Example single danger button -->
<div class="btn-group">
  <button style type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản lý sản phẩm
  </button>
  <div class="dropdown-menu" >
    <a  class="dropdown-item" href="{{route('product.getListProduct')}}">Danh sách sản phẩm</a>
    <a class="dropdown-item" href="{{route('product.getAdd')}}">Thêm sản phẩm</a>

  </div>
</div>
          </li>
          <li class="nav-item">
            <!-- Example single danger button -->
<div class="btn-group">
 
   
   
  
</div>
          </li>
          
        </ul>
       
      </div>
      <ul class="navbar-nav px-3">
        
        <li class="nav-item text-nowrap">
          <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
          <a class="nav-link" href="{{route('user.logout')}}">Đăng xuất</a> 
        </li>
        
      </ul>
    </div>
  </nav>
<!-- end header -->