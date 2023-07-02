<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel"><!-- panel Starts -->



</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->
<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> New Costumized Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Order #</th>
<th>Customer</th>
<th>Cake Name</th>
<th>Flavor</th>
<th>Category</th>
<th>Cake Label</th>
<th>Description</th>
<th>Date Needed</th>
<th>Image</th>
<th>Status</th>
<th>Contact No</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_order = "select * from customized_order order by 1 DESC LIMIT 0,5";
$run_order = mysqli_query($con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){


$order_id = $row_order['order_id'];

$c_id = $row_order['customer_id'];

$cake_name = $row_order['cake_name'];

$flavor = $row_order['flavor'];

$p_cat = $row_order['p_cat'];

$cake_label = $row_order['cake_label'];

$order_desc = $row_order['order_desc'];

$order_date = $row_order['order_date'];

$product_img1 = $row_order['product_img1'];

$status = $row_order['status'];

$costumer_contact = $row_order['costumer_contact'];


$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php

$get_customer = "select * from customers where customer_id='$c_id'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_email = $row_customer['customer_email'];
echo $customer_email;
?>
</td>

<td><?php echo $cake_name; ?></td>
<td ><center><?php echo $flavor; ?></center></td>
<td><?php echo $p_cat; ?></td>
<td><?php echo $cake_label; ?></td>
<td><center><?php echo $order_desc; ?></center></td>
<td><?php echo $order_date; ?></td>
<td><center><img src="../customer/newcake/<?php echo $product_img1; ?>" width="100" height="100"></td>
<td>

<?php

echo $status;
?>
</td>
<td><?php echo $costumer_contact; ?></td>
</tr>

<?php } ?>

</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?view_cost" >

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel"><!-- panel Starts -->



</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->

<?php } ?>