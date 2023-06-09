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
    <div class="container-fluid pd-0">
      <nav class="navbar navbar-expand-lg">
         <div class="container-fluid">
          <ul class="navbar-nav mx-auto mb-lg-1">
            <li class="nav-item">
                <?php
                if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'> <a class='nav-link' href='#'>Welcome Guest</a></li>";
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

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>