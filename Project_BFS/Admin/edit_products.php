<?php
include('../Includes/connect.php');
      if(isset($_POST['edit_products'])){
  
      $product_title=$_POST['product_title'];
      $product_description=$_POST['product_description'];
      $product_keyword=$_POST['product_keyword'];
      $product_image=$_FILES['product_image']['name'];
      $temp_image=$_FILES['product_image']['tmp_name'];
      $product_price=$_POST['product_price'];
      $product_status='true';

      if($product_title=='' or $product_description=='' or $product_keyword=='' or
      $product_price=='' or $product_image=='' ){
        echo "<script>alert('Fill all the blanks') </script>";
        exit();
      }
      else{
        move_uploaded_file($temp_image, "./product_image/$product_image");

        $edit_products="insert into `products` (product_title, product_description, product_keyword, product_image, product_price, date, status)
        values ('$product_title', '$product_description', '$product_keyword', '$product_image', '$product_price',NOW(), '$product_status')";
        $result_query=mysqli_query($con,$edit_products);
        if($result_query){
          echo "<script>alert('Successfully added') </script>";
        }
      }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
   <body class="bg-body-tertiary">
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> Futureniture</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto mb-lg-1">
            <li class="nav-item"> 
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edit_products.php">Insert Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?view_products">View Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?list_orders">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?list_payments">Payments</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="index.php?list_users">Users</a>
            </li> 
                <?php
                if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'> <a class='nav-link' href='#'>Welcome Admin</a></li>";
                }else{
                echo "<li class='nav-item'> <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a></li>";
                }
                ?>
            </li>
             <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fa-solid fa-user"> </i>
              </a>

              <ul class="dropdown-menu">
                <?php
                if(!isset($_SESSION['username'])){
                echo "<li><a class='dropdown-item' href='admin_login.php'>Login</a></li>";
                echo "<li><a class='dropdown-item' href='admin_registration.php'>Register</a></li>";
                }else{
                echo "<li><a class='dropdown-item' href='admin_logout.php'>Logout</a></li>";
                }
                ?>
              </ul>
            </li>
          </ul>
         </div>
      </nav>

      <div class="bg-light">
        <h4 class="text-center p-2"> Admin Access </h4>
      </div>

    </div>

    <div class="container my-3">
      <?php
      if(isset($_GET['view_products'])){
        include('view_products.php');
      }
      if(isset($_GET['change_products'])){
        include('change_products.php');
      }
      if(isset($_GET['delete_products'])){
        include('delete_products.php');
      }
      if(isset($_GET['list_orders'])){
        include('list_orders.php');
      }
      if(isset($_GET['list_payments'])){
        include('list_payments.php');
      }
      if(isset($_GET['list_users'])){
        include('list_users.php');
      }
      ?>
    <div class="container">
      <h4 class="text-center mt-3"> Insert Products </h4>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">Product Title</label>
              <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>
          </div>
          
          <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_description" class="form-label">Product Description</label>
              <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required>
          </div>

          <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keyword" class="form-label">Product Keyword</label>
              <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required>
          </div>

           <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image" class="form-label">Product Image</label>
              <input type="file" name="product_image" id="product_keyword" class="form-control"  required>
          </div>

           <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">Product Price</label>
              <input type="text" name="product_price" id="product_keyword" class="form-control" placeholder="Enter Product Price" autocomplete="off" required>
          </div>
        
          <div class="form-outline mb-4 w-50 m-auto">
              <input type="submit" name="edit_products" class="bg-secondary px-3 py-2 border-0 text-light" value="Edit Products">
          </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>