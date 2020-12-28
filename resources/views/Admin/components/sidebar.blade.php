<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./../../../../public/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="./../../../../public/vendor/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="./../../../../public/assets/css/styles.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="./../../../css/app.css" type="text/css" rel="stylesheet" />
</head>

<body>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{!! route('admin.index') !!}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Khu vực quản trị</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{!! route('admin.index') !!}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Trang chủ</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Order -->
  <div class="sidebar-heading">
    Quản lý đơn hàng
  </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
      <i class="fas fa-fw fa-cog"></i>
      <span>Đơn hàng</span>
    </a>
    <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Đơn hàng</h6>
        <a class="collapse-item" href="{!! route('admin.order') !!}">Liệt kê</a>        
      </div>
    </div>
  </li>


  <!-- Heading -->
  <div class="sidebar-heading">
    Quản lý sản phẩm
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Category</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh mục sản phẩm</h6>
        <a class="collapse-item" href="{!! route('admin.category.getAdd') !!}">Thêm mới</a>
        <a class="collapse-item" href="{!! route('admin.category.getList') !!}">Liệt kê</a>        
      </div>
    </div>
  </li>

   <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fab fa-product-hunt"></i>
      <span>Product</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh mục sản phẩm</h6>
        <a class="collapse-item" href="{!! route('admin.product.getAdd') !!}">Thêm mới</a>
        <a class="collapse-item" href="{!! route('admin.product.getList') !!}">Liệt kê</a>        
      </div>
    </div>
  </li>

   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fab fa-product-hunt"></i>
      <span>Slider</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh mục slider</h6>
        <a class="collapse-item" href="{!! route('admin.slider.getAdd') !!}">Thêm mới</a>
        <a class="collapse-item" href="{!! route('admin.slider.getList') !!}">Liệt kê</a>        
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
   <!-- Heading -->
  <div class="sidebar-heading">
    Quản lý người dùng
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>User</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh mục người dùng</h6>
        <a class="collapse-item" href="{!! route('admin.user.getAdd') !!}">Thêm mới</a>
        <a class="collapse-item" href="{!! route('admin.user.getList') !!}">Liệt kê</a>        
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseThree">
      <i class="fas fa-fw fa-cog"></i>
      <span>Liên hệ</span>
    </a>
    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Liên hệ</h6>
        <a class="collapse-item" href="{{ route('admin.contact.getList') }}">Liên hệ</a>       
      </div>
    </div>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>

    <!-- Liên kết Jquery -->
    <script src="./../../../../public/vendor/jquery/jquery-3.4.1.min.js"></script>

    <!-- Liên kết Bootstrap -->
    <script src="./../../../../public/vendor/bootstrap/js/bootstrap.js"></script>
    <!-- js -->
    <script src="./../../../../public/assets/js/scripts.js"></script>
</body>

</html>