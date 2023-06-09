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
    <title>Cart Details</title>
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
      .cart_image {
        width: 80px;
        height: 80px;
        object-fit: contain; 
}
    </style>
  </head>
  <body class=  "bg-body-tertiary">
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
              <a class="nav-link active" aria-current="page" href="../User/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../User/product.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping px-2"></i><sup>
              <?php cart_item();?>
            </a></sup>
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

    <div class="bg-light">
      <h3 class="text-center pt-2 pb-5"> User Cart </h3>
    </div>

    <div class="container">
      <div class="row">
        <form action="" method="post"> 
        <table class="table table-bordered text-center table-sm">
          
          <tbody class="bg-white">
            <?php
            global $con;
            $get_ip_address = getIPAddress(); 
            $total_price=0; 
            $cart_query="Select * from `cart_details` where ip_address='$get_ip_address'";
            $result=mysqli_query($con,$cart_query);
            $result_count=mysqli_num_rows($result);
            if($result_count>0){
           echo "<thead'>
            <tr>
              <th>Product Title</th>
              <th>Product Image</th>
              <th>Quantity</th>
              <th>Total Price</th>
              <th>Remove</th>
              <th colspan='2'>Operation</th>
            </tr>
          </thead>";
          
            while($row=mysqli_fetch_array($result)){
            $product_id=$row['product_id'];
            $select_products="Select * from `products` where product_id='$product_id'";
            $result_products=mysqli_query($con,$select_products);
            while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['product_price']);
            $price_table=$row_product_price['product_price'];
            $product_title=$row_product_price['product_title'];
            $product_image=$row_product_price['product_image'];
            $product_values=array_sum($product_price);
            $total_price+=$product_values;
    
            ?>
            <tr>
              <td class="col-2"><?php echo $product_title ?></td>
              <td class="col-1"><img src="../Admin/product_image/<?php echo $product_image ?>" alt="" class="cart_image"> </td>
              <td class="col-1"><input type="text" name="quantity" class="form-input w-25"> </td>
              <?php
              $get_ip_address = getIPAddress();
              if(isset($_POST['update_cart'])){
                $quantities=$_POST['quantity'];
                $update_cart="update `cart_details` set quantity=$quantities where ip_address='$get_ip_address'" ;
                $result_products_quantity=mysqli_query($con,$update_cart);
                $total_price=$total_price*$quantities;
              }  
              ?>
              <td class="col-1"> <?php echo $price_table ?>
              <td class="col-1"><input type="checkbox" name="removeitem[]" value="<?php echo $product_id?>"> </td>
              <td class="col-1">
              <input type="submit" value="Update" class="bg-secondary px-3 py-2 border-0 mx-3 text-light" name="update_cart"> </td>
              <td class="col-1">
             <input type="submit" value="Remove" class="bg-secondary px-3 py-2 border-0 mx-3 text-light" name="remove_cart"> </td>
            </td>
            </tr>

            <?php }}}

              else{
                echo "<h2 class='text-center text-danger'> Sorry, your cart is empty. </h2>";
              }
            ?>
          </tbody>
        </table>

      <div class="d-flex mb-5 ms-5 px-5 fixed-bottom w-100">
        <?php 
            $get_ip_address = getIPAddress();  
            $cart_query="Select * from `cart_details` where ip_address='$get_ip_address'";
            $result=mysqli_query($con,$cart_query);
            $result_count=mysqli_num_rows($result);
            if($result_count>0){
              echo"
              <h4 class='pl-2'>
              Subtotal: ₱ <strong class='text-info'>$total_price</strong>
              </h4>
              <input type='submit' value='Continue Shopping' class='bg-secondary px-3 py-2 border-0 mx-3 text-light' name='continue_shopping'>
              <button class='bg-secondary p-3 py-2 border-0'> <a href='../User/user_interface/checkout.php' class='text-light text-decoration-none'>Checkout</a></button>";
            }
            else{
              echo " <input type='submit' value='Continue Shopping' class='bg-secondary px-3 py-2 border-0 mx-3 text-light' name='continue_shopping'>";
            }
            if(isset($_POST['continue_shopping'])){
              echo "<script> window.open('product.php','_self')</script>";
            }
        ?>
      
          </div>
      </div>
    </div>
    </form>
    <?php
    function remove_cart_item(){
      global $con;
      if(isset($_POST['remove_cart'])){
        foreach($_POST['removeitem'] as $remove_id){
          echo $remove_id;
          $delete_query="Delete from `cart_details` where product_id=$remove_id";
          $run_delete=mysqli_query($con,$delete_query);
          if($run_delete){
            echo "<script> window.open('cart.php','_self') </script>";
          }}
        }
    }
    echo $remove_item=remove_cart_item();
    ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
