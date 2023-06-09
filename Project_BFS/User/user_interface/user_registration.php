<?php
include('connect.php');
include('function.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Registration</title>
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
  </head>
  <body>
  <div class="container-fluid my-3">
    <h3 class="text-center pb-3"> New User Registration </h3>
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-lg-12 col-xl-4">
        <form action="" method="post">
          <div class="form-outline mb-4">
            <label for="user_username" class="form_label">Username</label>
            <input type="text" id="user_username" class="form-control" 
            placeholder="Enter your username" autocomplete="off" name="user_username" required>
          </div>
          <div class="form-outline mb-4">
            <label for="user_email" class="form_label">Email</label>
            <input type="email" id="user_email" class="form-control" 
            placeholder="Enter your email" autocomplete="off" name="user_email" required>
          </div>
          <div class="form-outline mb-4">
            <label for="user_password" class="form_label">Password</label>
            <input type="password" id="user_password" class="form-control" 
            placeholder="Enter your password" autocomplete="off" name="user_password" required>
          </div>
          <div class="form-outline mb-4">
            <label for="user_cpassword" class="form_label">Confirm Password</label>
            <input type="password" id="user_cpassword" class="form-control" 
            placeholder="Confirm password" autocomplete="off" name="user_cpassword" required>
          </div>
          <div class="form-outline mb-4">
            <label for="user_address" class="form_label">Address</label>
            <input type="text" id="user_address" class="form-control" 
            placeholder="Enter your address" autocomplete="off" name="user_address" required>
          </div>
          <div class="form-outline mb-4">
            <label for="user_contact" class="form_label">Contact Number</label>
            <input type="text" id="user_contact" class="form-control" 
            placeholder="Enter your contact number" autocomplete="off" name="user_contact" required>
          </div>
          <div class="mt-4 pt-2">
            <input type="submit" value="Register" class="bg-secondary px-3 py-2 border-0 text-light" name="user_register">
            <p class="fw-bold mt-2 pt-1 mb-0"> Already have an account? <a href="user_login.php" class="text-decoration-none"> Login </a> </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<?php
  if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $user_cpassword=$_POST['user_cpassword'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_ip=getIPAddress();

    $select_query="Select * from `user_table` where user_name='$user_username' or user_email='$user_email' ";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
      echo "<script> alert('User already exist!') </script>";
    }
    else if($user_password!=$user_cpassword){
      echo "<script> alert('Passwords do not match!') </script>";
    }
    else{
    $insert_query="insert into `user_table` (user_name,user_email,user_password,user_ip,user_address,user_contact)
    values ('$user_username','$user_email','$hash_password','$user_ip','$user_address','$user_contact')";
    $sql_execute=mysqli_query($con,$insert_query);
    if($sql_execute){
      echo "<script> alert('Your registration is successful!') </script>";
    }
      else{
        die(mysqli_error($con));
      }
    }

  $select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
  $result_cart=mysqli_query($con,$select_cart_items);
  $rows_count=mysqli_num_rows($result_cart);
  if($rows_count>0){
      $_SESSION['username']=$user_username;
      echo "<script> alert('You have items in your cart!') </script>";
      echo "<script>window.open('../checkout.php','_self') </script>";
  }
  else{
      echo "<script>window.open('../product.php','_self') </script>";

  }
  }
?>