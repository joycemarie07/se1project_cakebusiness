<?php
include('connect.php');
include('function.php');
@session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <div class="container-fluid m-3">
      <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 col-xl-5">
            <img src="" alt="Admin Registration" class="img-fluid"> 
          </div>
          <div class="col-lg-6 col-xl-4">
            <form action="" method="post">
              <div class="form-outline mb-4">
                <label for="username" class="form-label"> Username </label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required class="form-control">
              </div>
              <div class="form-outline mb-4">
                <label for="userpassword" class="form-label"> Password </label>
                <input type="password" id="userpassword" name="userpassword" placeholder="Enter your password" required class="form-control">
              </div>
              <div>
                <input type="submit" value="Login" class="bg-secondary px-3 py-2 border-0 text-light" name="admin_login">
                <p class="fw-bold mt-2 pt-1 mb-0"> Don't you have an account? <a href="admin_registration.php" class="text-decoration-none"> Register </a> </p>

              </div>
            </form>
          </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  if(isset($_POST['admin_login'])){
    $username=$_POST['username'];
    $userpassword=$_POST['userpassword'];
    $select_query="Select * from `admin_table` where admin_name='$username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);


    if($row_count>0){
          $_SESSION['username']=$username;

      if(password_verify($userpassword,$row_data['admin_password'])){
      echo "<script> alert('Login successful') </script>";
      echo "<script>window.open('index.php','_self') </script>";
      }
    else{
      echo "<script> alert('Invalid Credentials') </script>";
    }
  }}
?>