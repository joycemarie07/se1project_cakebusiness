<?php
include('connect.php');
include('function.php');
session_start();
if(isset($_GET['order_id'])){
  $order_id=$_GET['order_id'];
  $select_data="Select * from `user_orders` where order_id='$order_id'";
  $result=mysqli_query($con,$select_data);
  $row_fetch=mysqli_fetch_assoc($result);
  $invoice_number=$row_fetch['invoice_number']; 
  $due_amount=$row_fetch['due_amount'];  
}
if(isset($_POST['confirm_payment'])){
  $invoice_number=$_POST['invoice_number'];
  $due_amount=$_POST['due_amount'];
  $payment_mode=$_POST['payment_mode']; 
  $insert_query="insert into `user_payments` (order_id,invoice_number,due_amount,payment_mode)
  values ($order_id,$invoice_number,$due_amount,'$payment_mode')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script> alert('Payment Successful!') </script>"; 
    echo "<script>window.open('user_profile.php?myorders','_self') </script>";
  }
  $update_orders="update `user_orders` set order_status='Complete' where order_id=$order_id";
  $result=mysqli_query($con,$update_orders);


}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payment Page</title>
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
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../product.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping px-2"></i><sup>
              <?php cart_item();?>
            </a></sup>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total:
                <?php
                total_cart_price();
                ?>
              </a>
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
                echo "<li><a class='dropdown-item' href='user_login.php'>Login</a></li>";
                echo "<li><a class='dropdown-item' href='user_registration.php'>Register</a></li>";
                }else{
                echo "<li><a class='dropdown-item' href='user_profile.php'>My Account</a></li>";
                echo "<li><a class='dropdown-item' href='user_logout.php'>Logout</a></li>";
                }
                ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div>

    <div class="container my-5">
      <h1 class="text-center"> Confirm Payment </h1>
      <form action="" method="post">
        <div class="form-outline my-4 text-center w-50 m-auto">
          <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number ?>">
        </div>
        <div class="form-outline my-4 text-center w-50 m-auto">
          <label for="" class=""> Amount </label>
          <input type="text" class="form-control w-50 m-auto" name="due_amount" value="<?php echo $due_amount ?>">
        </div>
        <div class="form-outline my-4 text-center w-50 m-auto">
          <select name="payment_mode"  class="form-select w-50 m-auto" id="">
            <option>Select Payment Method</option>
            <option>Cash on delivery</option>
            <option>Gcash</option>
            <option>Paypal</option>
            <option>Paymaya</option>
          </select>
        </div>
        <div class="form-outline my-4 text-center w-50 m-auto">
          <input type="submit" class="bg-secondary py-2 px-3 border-0 text-light" value="Confirm" name="confirm_payment">
        </div>
      </form>
    </div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


