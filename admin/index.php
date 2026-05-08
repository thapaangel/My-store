<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <!-- bootstrap css and js link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- fontawesome -->
  <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <!--css file-->
  <link rel="stylesheet" href="../style.css">
  <style>
.admin_image{
  width: 100px;
  object-fit: contain;
}
  </style>

</head>
<body>
  <!--navbar-->
  <div class="container-fluid p-0"></div>
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <img src="../images/logo.png" alt="logo" class="logo">
        <nav class="navbar navbar-expand-lg ">
                 <ul class="navbar-nav ">
                            <li class="nav-item">
                              <a href="#" class="nav-link">Welcome guest</a>
                            </li>
                 </ul>
        </nav>
    </div>
</nav>
</div>


 <!--second child-->
 <div class ="bg-light">
  <h3 class="text-center p-2">Manage Details</h3>
 </div>

 <!--third child-->
 <div class="row">
  <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
    <div class="px-5">
      <a href="#"><img src="../images/frozen.jpg" alt="" class="admin_image"></a>
      <p class="text-light text-center">Aruna</p>
    </div>
    <div class="button text-center">
      <button class="my-3"></button>
      <a href="insert_product.php" class="btn btn-info btn-lg my-1 text-light border border-white">Insert Products</a></button>
      <button class="my-3"></button>
      <a href="" class="btn btn-info btn-lg my-1 text-light border border-white">View Products</a></button>
      <button class="my-3"></button>
      <a href="index.php?insert_category" class="btn btn-info btn-lg my-1 text-light border border-white">Insert Categories</a></button>
      <button class="my-3"></button>
      <a href="index.php?view_category" class="btn btn-info btn-lg my-1 text-light border border-white">View Categories</a></button>
      <button class="my-3"></button>
      <a href="index.php?insert_brand" class="btn btn-info btn-lg my-1 text-light border border-white">Insert Brands</a></button>
      <button class="my-3"></button>
      <a href="index.php?view_brand" class="btn btn-info btn-lg my-1 text-light border border-white">View Brands</a></button>
      <button class="my-3"></button>
      <a href="" class="btn btn-info btn-lg my-1 text-light border border-white">All Orders</a></button>
      <button class="my-3"></button>
      <a href="" class="btn btn-info btn-lg my-1 text-light border border-white">All Payments</a></button>
      <button class="my-3"></button>
      <a href="" class="btn btn-info btn-lg my-1 text-light border border-white">List Users</a></button>
      <button class="my-3"></button>
      <a href="" class="btn btn-info btn-lg my-1 text-light border border-white">Logout</a></button>
    </div>
  </div>
</div>

<!--forth child-->
<div class="container my-3">
  <?php
  if(isset($_GET['insert_category'])){
    include('insert_categories.php');
  }
  if(isset($_GET['insert_brand'])){
    include('insert_brands.php');
  }
  if(isset($_GET['view_category'])){
    include('view_categories.php');
  }
  if(isset($_GET['view_brand'])){
    include('view_brands.php');
  }
  ?>
  
</div>

  <!-- last child -->
  <div class="bg-info p-3 text-center mt-3">
    <p>ALL rights reserved by Aruna - 2022</p>
  </div>
</div>


  
</body>
</html>