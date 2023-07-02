<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<div class="row"><!-- 1 row Starts -->
<link rel="icon" href="theas.ico" />
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<!-- <h1 class="page-header">Dashboard</h1> -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_products; ?> </div>

<div>Products</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_products">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-comments fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_customers; ?> </div>

<div>Customers</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_customers">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-shopping-cart fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_p_categories; ?> </div>

<div>Products Categories</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_p_cats">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-support fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_total_orders; ?> </div>

<div>Orders</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_orders">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->

<div class="row">
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-success"><!-- panel panel-red Starts -->
        
       <div class="panel-heading"><!-- panel-heading Starts -->
        
        <div class="row"><!-- panel-heading row Starts -->
        
        <div class="col-xs-3"><!-- col-xs-3 Starts -->
        
        <i class="fa fa-pes fa-5x"> </i>
        
        </div><!-- col-xs-3 Ends -->
        
        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
        
        <div class="huge"> <?php echo $count_total_earnings ?> </div>
        
        <div>Earnings</div>
        
        </div><!-- col-xs-9 text-right Ends -->
        
        </div><!-- panel-heading row Ends -->
        
        </div><!-- panel-heading Ends -->
        
        <a href="index.php?view_orders">
        
        <div class="panel-footer"><!-- panel-footer Starts -->
        
        <span class="pull-left"> View Details </span>
        
        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
        
        <div class="clearfix"></div>
        
        </div><!-- panel-footer Ends -->
        
        </a>
        
        </div><!-- panel panel-red Ends -->
        
        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-warning"><!-- panel panel-red Starts -->
            
            <div class="panel-heading"><!-- panel-heading Starts -->
            
            <div class="row"><!-- panel-heading row Starts -->
            
            <div class="col-xs-3"><!-- col-xs-3 Starts -->
            
            <i class="fa fa-spinner fa-5x"> </i>
            
            </div><!-- col-xs-3 Ends -->
            
            <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
            
            <div class="huge"> <?php echo $count_pending_orders ?> </div>
            
            <div>Pending Orders</div>
            
            </div><!-- col-xs-9 text-right Ends -->
            
            </div><!-- panel-heading row Ends -->
            
            </div><!-- panel-heading Ends -->
            
            <a href="index.php?view_orders">
            
            <div class="panel-footer"><!-- panel-footer Starts -->
            
            <span class="pull-left"> View Details </span>
            
            <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
            
            <div class="clearfix"></div>
            
            </div><!-- panel-footer Ends -->
            
            </a>
            
            </div><!-- panel panel-red Ends -->
            
            </div><!-- col-lg-3 col-md-6 Ends -->



            <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

                <div class="panel panel-info"><!-- panel panel-red Starts -->
                
                <div class="panel-heading"><!-- panel-heading Starts -->
                
                <div class="row"><!-- panel-heading row Starts -->
                
                <div class="col-xs-3"><!-- col-xs-3 Starts -->
                
                <i class="fa fa-check fa-5x"> </i>
                
                </div><!-- col-xs-3 Ends -->
                
                <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                
                <div class="huge"> <?php echo $count_completed_orders ?> </div>
                
                <div>Completed Orders</div>
                
                </div><!-- col-xs-9 text-right Ends -->
                
                </div><!-- panel-heading row Ends -->
                
                </div><!-- panel-heading Ends -->
                
                <a href="index.php?view_orders">
                
                <div class="panel-footer"><!-- panel-footer Starts -->
                
                <span class="pull-left"> View Details </span>
                
                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                
                <div class="clearfix"></div>
                
                </div><!-- panel-footer Ends -->
                
                </a>
                
                </div><!-- panel panel-red Ends -->
                
                </div><!-- col-lg-3 col-md-6 Ends -->

</div>

<div class="row" ><center><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> New Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Order #</th>
<th>Customer</th>
<th>Refference No</th>
<th>Product ID</th>
<th>Qty</th>
<th>Size</th>
<th>Cake Label</th>
<th>Flavor</th>
<th>Status</th>
<th>Date Needed</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_order = "select * from customer_orders order by 1 DESC LIMIT 0,5";
$run_order = mysqli_query($con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){


$order_id = $row_order['order_id'];

$c_id = $row_order['customer_id'];

$refference_no = $row_order['invoice_no'];

$product_id = $row_order['product_id'];

$qty = $row_order['qty'];

$size = $row_order['size'];

$cake_label = $row_order['cake_label'];

$date_need = $row_order['date_need'];

$flavor = $row_order['flavor'];

$order_status = $row_order['order_status'];


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

<td bgcolor="orange"><?php echo $refference_no; ?></td>
<td ><center><?php echo $product_id; ?></center></td>
<td><?php echo $qty; ?></td>
<td><?php echo $size; ?></td>
<td><center><?php echo $cake_label; ?></center></td>
<td><?php echo $flavor; ?></td>
<td>
<?php
if($order_status=='pending'){

echo $order_status='<div style="color:red;">Pending</div>';

}
if($order_status=='Complete'){

echo $order_status='<div style="color:Black;">Completed</div>';

}
if($order_status=='ForVerification'){

echo $order_status='<div style="color:blue;">For Verification</div>';

}
if($order_status=='To Deliver'){

echo $order_status='<div style="color:orange;">To Deliver</div>';

}

if($order_status=='Delivered'){

echo $order_status='<div style="color:green;">Delivered</div>';

}

if($order_status=='Wrong Transaction Id'){

echo $order_status='<div style="color:red;">Wrong Transaction Id</div>';

}

if($order_status=='Paid'){

echo $order_status='<div style="color:green;">Paid</div>';

}


?>
</td>
<td><?php echo $date_need; ?></td>
</tr>

<?php } ?>

</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?view_orders" >

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

<a href="index.php?view_orders" >

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