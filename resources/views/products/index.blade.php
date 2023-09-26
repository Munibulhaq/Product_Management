<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin-Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <span>Dashboard</span></a>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      

      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.create')}}">
          <button type="button" class="btn btn-danger">Add Product</button>
        </a>
    
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <h2>Products</h2>
        </nav>
        <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($student as $product)
        <img class="img rounded" src="{{asset('img')}}/{{$product->Image}}" height="300" width="300"  alt="">

        <div class="post-preview">
         
            <b><h1 class="post-title">
             {{$product->Name}}
            </h1></b>
            <h3 class="post-subtitle">
              {{Illuminate\Support\Str::of($product->Description)->words(10)}}
            </h3>
         
          <h4>Price: {{$product->Price}} &nbsp;&nbsp;&nbsp;
          Quantity: {{$product->Quantity}} </h4>
         <a  href="{{route('product.edit',$product->id)}}">
          <button type="button" class="btn btn-info">Info</button></a> &nbsp;
         <form action="{{route('product.destroy',$product->id)}}" method="POST">
                @method ('DELETE')
                @csrf<button type="button" class="btn btn-danger">Delete</button></form>
                </div>
        <hr>
        @endforeach
        <!-- Pager -->
      </div>
    </div>
  </div>

  

        
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html> 



 