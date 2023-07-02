<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");



?>
<center><!-- center Starts -->

<h1>My Orders</h1>

<p class="lead"> Your orders on one place.</p>

<p class="text-muted" >

If you have any questions, please feel free to <strong><a href="../contact.php" >  contact us</a></strong>, our customer service center is working for you 24/7.


</p>


</center><!-- center Ends -->

<hr>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th><center>#</th>
<th><center>Cake Name</th>
<th><center>Flavor</th>
<th><center>Catergory</th>
<th><center>Label on Cake</th>
<th><center>Description Date</th>
<th><center>Date needed</th>
<th><center>Picture</th>
<th><center>Edit</th>
<th><center>Delete</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_orders = "select * from customized_order where customer_id='$customer_id'";

$run_orders = mysqli_query($con,$get_orders);

$i = 0;

while($row_orders = mysqli_fetch_array($run_orders)){

$order_id = $row_orders['order_id'];

$cake_name = $row_orders['cake_name'];

$flavor = $row_orders['flavor'];

$p_cat = $row_orders['p_cat'];

$cake_label = $row_orders['cake_label'];

$order_desc = $row_orders['order_desc'];

$order_date = $row_orders['order_date'];

$product_img1 = $row_orders['product_img1'];

$costumer_contact = $row_orders['costumer_contact'];

$costumer_address = $row_orders['costumer_address'];

$i++;


?>

<tr><!-- tr Starts -->

<th><center><?php echo $i; ?></th>

<td><center><?php echo $cake_name; ?></td>

<td><center><?php echo $flavor; ?></td>

<td><center><?php

$get_p_cat = "select * from product_categories ";

$run_p_cat = mysqli_query($con,$get_p_cat);

while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {

$p_cat_id = $row_p_cat['p_cat_id'];

$p_cat_title = $row_p_cat['p_cat_title'];

$p_cat = $p_cat_title;

}

?>
<?php echo $p_cat; ?></td>

<td><center><?php echo $cake_label; ?></td>

<td><center><?php echo $order_desc; ?></td>

<td><center><?php echo $order_date; ?></center></td>

<td><center><img src="customer/newcake/<?php echo $product_img1; ?>" width="100" height="100"></td>
<td><a href="view_cost?edit_cat=<?php echo $order_id; ?>">Edit</td>
<td><a href="my_account.php?delete_order=<?php echo $order_id; ?>">Delete</td>

</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->


</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->



