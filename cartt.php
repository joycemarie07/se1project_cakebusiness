<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<center><!-- center Starts -->

<h1>Edit Cart</h1>

<?php

$ip_add = getRealUserIp();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

$count = mysqli_num_rows($run_cart);

?>


</center><!-- center Ends -->

<hr>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th ><center>Product</th>

<th><center>Quantity</th>

<th><center>Unit Price</th>

<th><center>Size</th>


<th> <center>Sub Total </th>
<th> <center>Text on Cake </th>
<th><center>Flavor</th>
<th><center>Edit</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php
$i = 0;
$total = 0;
while($row_cart = mysqli_fetch_array($run_cart)){

$pro_id = $row_cart['p_id'];

$pro_size = $row_cart['size'];

$pro_qty = $row_cart['qty'];

$cake_label = $row_cart['cake_label'];

$flavor = $row_cart['flavor'];

$only_price = $row_cart['p_price'];

$get_products = "select * from products where product_id='$pro_id'";

$run_products = mysqli_query($con,$get_products);

while($row_products = mysqli_fetch_array($run_products)){

$product_title = $row_products['product_title'];

$product_img1 = $row_products['product_img1'];

$subsub = $only_price*$pro_qty;

$sub_total = $subsub+40;

$_SESSION['pro_qty'] = $pro_qty;

$total += $sub_total;

}
?>

<tr><!-- tr Starts -->

<th><center><?php echo $i; ?></th>

<td><center><?php echo $product_title; ?></td>

<td><center><?php echo $pro_qty; ?></td>

<td><center><?php echo $pro_size; ?></td>

<td><center>₱<?php echo $subsub; ?></td>

<td><center><?php echo $cake_label; ?></td>

<td><center><?php echo $flavor; ?></center></td>

<td><center><a href="customer/ed/edit_p_cat.php?edit_p_cat=<?php echo $pro_id; ?>"><i class="fa fa-pencil"> </td>



</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->


</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->



