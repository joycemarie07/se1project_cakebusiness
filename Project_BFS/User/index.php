<?php
include('../Includes/connect.php');
include('../Functions/function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">
    <style>
      .home{
  display: flex;
  align-items: center;
  min-height: 90vh;
  background:url(background.jpg) no-repeat;
  background-size: contain;
  background-position: center;
  
}
    </style>
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
              <a class="nav-link" href="product.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li> 
             <?php
                if(!isset($_SESSION['username'])){
                echo "<li class='nav-item'> <a class='nav-link' href='#'>Welcome Guest</a></li>";
                }else{
                echo "<li class='nav-item'> <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a></li>";
                }
                ?>
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
                echo "<li><a class='dropdown-item' href='../User/user_interface/user_login.php'>Login</a></li>";
                echo "<li><a class='dropdown-item' href='../User/user_interface/user_registration.php'>Register</a></li>";
                }else{
                echo "<li><a class='dropdown-item' href='../User/user_interface/user_profile.php'>My Account</a></li>";
                echo "<li><a class='dropdown-item' href='../User/user_interface/user_logout.php'>Logout</a></li>";
                }
                ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div>
    

    </header>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>