<?php
include('connect.php');
include('function.php');
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../style.css">

    <style>
      body{
        overflow-x: hidden;
      }
      .product_image{
        width: 100px;
        object-fit: contain;
      }
      .edit_image{
        width: 100px;
        object-fit: contain;
      }
      
    </style>
  </head>
  <body>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>