<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ecommerce website</title>

  <!-- bootstrap css and js -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- fontawesome -->
  <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <!-- custom css -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid p-0">

  <!-- first child (navbar) -->
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <img src="./images/logo.png" alt="logo" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-shopping-cart"><sup>1</sup></i></a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Total Price/-100</a></li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- second child -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
      <li class="nav-item"><a class="nav-link active" href="#">Welcome guest</a></li>
      <li class="nav-item"><a class="nav-link active" href="#">Login</a></li>
    </ul>
  </nav>

  <!-- third child -->
  <div class="bg-light p-2">
    <h3 class="text-center">Thapa's store</h3>
    <p class="text-center">Communication is at the heart of ecommerce and community</p>
  </div>

  <!-- fourth child -->
  <div class="row">

    <!-- main product area (10 columns) -->
    <div class="col-md-10">
      <div class="row">

        <!-- Card 1 -->
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/Apple.jpg" class="card-img-top" alt="Apple">
            <div class="card-body">
              <h5 class="card-title">Apple</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/Orange.jpg" class="card-img-top" alt="Orange">
            <div class="card-body">
              <h5 class="card-title">Orange</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/dairymilk.jpg" class="card-img-top" alt="Dairy Milk Chocolate">
            <div class="card-body">
              <h5 class="card-title">Dairy Milk</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/necklace.webp" class="card-img-top" alt="Apple">
            <div class="card-body">
              <h5 class="card-title">Necklace</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/dress.jpg" class="card-img-top" alt="Apple">
            <div class="card-body">
              <h5 class="card-title">Princess Frock</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/saree.webp" class="card-img-top" alt="Apple">
            <div class="card-body">
              <h5 class="card-title">Saree</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- sidebar (2 columns) -->
    <div class="col-md-2 bg-secondary p-0">
      <ul class="navbar-nav text-center mb-0">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h5 class="mb-0">Delivery Brands</h5></a>
        </li>

<?php
$selectbrands = "SELECT * FROM brands";
$result_brands = mysqli_query($con, $selectbrands);
while($row_data = mysqli_fetch_assoc($result_brands)){
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    echo "<li class='nav-item'>
    <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
    </li>";
    } 
?>
</ul>

      <ul class="navbar-nav text-center mt-3 mb-0">
        <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
        </li>
      <?php
        $select_categories = "SELECT * FROM categories";
        $result_categories = mysqli_query($con, $select_categories);
        while($row_data = mysqli_fetch_assoc($result_categories)){
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='nav-item'>
        <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
       </li>";
       } 
      ?>
      </ul>
    </div>

  </div>

  <!-- last child -->
  <div class="bg-info p-3 text-center mt-3">
    <p>ALL rights reserved by Aruna - 2022</p>
  </div>

</div>
</body>
</html>
