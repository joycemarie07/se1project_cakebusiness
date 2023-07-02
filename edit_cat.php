<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");



?>

<?php

if(isset($_GET['edit_cat'])){

$edit_id = $_GET['edit_cat'];

$edit_cat = "select * from cart where pro_id='$edit_id'";

$run_edit = mysqli_query($con,$edit_cat);

$row_edit = mysqli_fetch_array($run_edit);

$c_id = $row_edit['p_id'];

$co_id = $row_edit['customer_id'];

$pro_id = $row_edit['product_id'];

$c_amount = $row_edit['due_amount'];

$c_invoice = $row_edit['invoice_no'];

$c_qty = $row_edit['qty'];

$c_size = $row_edit['size'];

$c_date = $row_edit['order_date'];

$c_status = $row_edit['order_status'];

$c_label = $row_edit['cake_label'];

}

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Edit Order

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Edit Order

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Order ID</label>

<div class="col-md-6">

<input type="text" name="order_id" class="form-control" value="<?php echo $c_id; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Costumer ID</label>

<div class="col-md-6">

<input type="text" name="customer_id" class="form-control" value="<?php echo $co_id; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Product ID</label>

<div class="col-md-6">

<input type="text" name="product_id" class="form-control" value="<?php echo $pro_id; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Due Amount</label>

<div class="col-md-6">

<input type="text" name="due_amount" class="form-control" value="<?php echo $c_amount; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Invoice No</label>

<div class="col-md-6">

<input type="text" name="invoice_no" class="form-control" value="<?php echo $c_invoice; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Quantity</label>

<div class="col-md-6">

<input type="text" name="qty" class="form-control" value="<?php echo $c_qty; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Size</label>

<div class="col-md-6">

<input type="text" name="size" class="form-control" value="<?php echo $c_size; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Order Date</label>

<div class="col-md-6">

<input type="text" name="order_date" class="form-control" value="<?php echo $c_date; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Order Status</label>

<div class="col-md-6">

<select name="order_status" class="form-control" >

<option><?php echo $c_status; ?></option>
<option>Paid</option>
<option>ForVerification</option>
<option>Pending</option>
<option>To Deliver</option>
<option>Delivered</option>
<option>Complete</option>


</select>
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Cake Label</label>

<div class="col-md-6">

<input type="text" name="cake_label" class="form-control" value="<?php echo $c_label; ?>" readonly>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Category" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$order_id = $_POST['order_id'];

$customer_id = $_POST['customer_id'];

$product_id = $_POST['product_id'];

$due_amount = $_POST['due_amount'];

$invoice_no = $_POST['invoice_no'];

$qty = $_POST['qty'];

$size = $_POST['size'];

$order_date = $_POST['order_date'];

$order_status = $_POST['order_status'];

$cake_label = $_POST['cake_label'];



$update_cat = "update customer_orders set customer_id='$customer_id',product_id='$product_id',due_amount='$due_amount',invoice_no='$invoice_no',qty='$qty',order_date='$order_date',order_status='$order_status',cake_label='$cake_label' where order_id='$c_id'";

$run_cat = mysqli_query($con,$update_cat);

if($run_cat){

echo "<script>alert('Order Has Been Updated')</script>";

echo "<script>window.open('index.php?view_orders','_self')</script>";

}

}



?>