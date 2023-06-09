<?php

function getProduct(){
          global $con;
          $select_query="Select * from `products` order by rand() limit 0,6";
          $result_query=mysqli_query($con,$select_query);
          // $row=mysqli_fetch_assoc($result_query);
          // echo $row['product_title'];
          while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];     
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
            <img src='../Admin/product_image/$product_image' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
            <h5 class'card-title'> $product_title </h5>
            <p class='card-text'> $product_description </p>
            <p class='card-text'>Price: $product_price/- </p>
            <a href='product.php?add_to_cart=$product_id'class='btn btn-info'>Add to cart</a>
            <a href='#' class='btn btn-secondary'>View more</a>
            </div>  
            </div>
          </div>";
          }       
}
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
function cart(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_address = getIPAddress();  
    $get_product_id=$_GET['add_to_cart'];
    $select_query="Select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows>0){
      echo "<script>alert('This item is already stored.') </script>";
      echo "<script>window.open('product.php','_self') </script>";
    }
    else{
      $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_address',0)";
      $result_query=mysqli_query($con,$insert_query);
      echo "<script>alert('Item is added to cart.') </script>";
      echo "<script>window.open('product.php','_self') </script>";

    }
  }
} 

function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_address = getIPAddress();  
    $select_query="Select * from `cart_details` where ip_address='$get_ip_address'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }
    else{
    global $con;
    $get_ip_address = getIPAddress();  
    $select_query="Select * from `cart_details` where ip_address='$get_ip_address'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    }
    echo $count_cart_items;
  }

function total_cart_price(){
    global $con;
    $get_ip_address = getIPAddress(); 
    $total_price=0; 
    $cart_query="Select * from `cart_details` where ip_address='$get_ip_address'";
    $result=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $select_products="Select * from `products` where product_id='$product_id'";
    $result_products=mysqli_query($con,$select_products);
    while($row_product_price=mysqli_fetch_array($result_products)){
    $product_price=array($row_product_price['product_price']);
    $product_values=array_sum($product_price);
    $total_price+=$product_values;
    }
}   echo $total_price;
}

function get_user_order_details(){
  global $con;
  $username=$_SESSION['username'];
  $get_details="Select * from `user_table` where user_name='$username'";
  $result_query=mysqli_query($con,$get_details);
  while($row_query=mysqli_fetch_array($result_query)){
    $user_id=$row_query['user_id'];
    if(!isset($_GET['edit_account'])){ 
    if(!isset($_GET['my_orders'])){ 
    $get_orders="Select * from `user_orders` where user_id='$user_id' and order_status='pending'";
    $result_orders_query=mysqli_query($con,$get_orders);
    $row_count=mysqli_num_rows($result_orders_query);
    if($row_count>0){
    echo "<h3 class='text-center'> You have <span class='text-danger'> $row_count </span> pending orders. </h3>
    <p class='text-center'><a href='user_profile.php?my_orders' class='text-dark text-decoration-none'>Order details</p></a>";
    }else{
    echo "<h3 class='text-center'> You have 0 pending orders. </h3>
    <p class='text-center'><a href='../product.php' class='text-dark text-decoration-none'>Explore products</p></a>";
    }
    }
  }
}
}


?>