<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet" />
    <!-- Font awesome -->
   
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/js/fontawesome.min.js')}}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}" type="text/css" rel="stylesheet" />
  
    <link rel="stylesheet" href="{{asset('mycss.css')}}" type="text/css" rel="stylesheet" />
</head>

<body>
  @include ('Admin.components.header')

    @yield('content')





   <!-- Liên kết Jquery -->
   <script src="{{ asset('vendor/jquery/jquery-3.4.1.min.js') }}"></script>

<!-- Liên kết Bootstrap -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
<!-- js -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>