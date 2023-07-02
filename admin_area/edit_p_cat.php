<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_p_cat'])){

$edit_p_cat_id = $_GET['edit_p_cat'];

$edit_p_cat_query = "select * from customized_order where order_id='$edit_p_cat_id'";

$run_edit = mysqli_query($con,$edit_p_cat_query);

$row_edit = mysqli_fetch_array($run_edit);

$p_or = $row_edit['order_id'];

$p_cos = $row_edit['customer_id'];

$p_flav = $row_edit['flavor'];

$p_cake = $row_edit['cake_name'];

$p_ca = $row_edit['p_cat'];

$p_label = $row_edit['cake_label'];

$p_desc = $row_edit['order_desc'];

$p_date = $row_edit['order_date'];

$p_img = $row_edit['product_img1'];

$p_contact = $row_edit['costumer_contact'];

$p_add = $row_edit['costumer_address'];

$p_stat = $row_edit['status'];

}


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i>  Edit Customized Orders

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

<input type="text" name="order_id" class="form-control" value="<?php echo $p_or; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Costumer ID</label>

<div class="col-md-6">

<input type="text" name="customer_id" class="form-control" value="<?php echo $p_cos; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Cake Name</label>

<div class="col-md-6">

<input type="text" name="product_id" class="form-control" value="<?php echo $p_cake; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Flavor</label>

<div class="col-md-6">

<input type="text" name="due_amount" class="form-control" value="<?php echo $p_flav; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Category</label>

<div class="col-md-6">

<input type="text" name="invoice_no" class="form-control" value="<?php echo $p_ca; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Cake Label</label>

<div class="col-md-6">

<input type="text" name="qty" class="form-control" value="<?php echo $p_cake; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Description</label>

<div class="col-md-6">

<input type="text" name="size" class="form-control" value="<?php echo $p_desc; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Order Date</label>

<div class="col-md-6">

<input type="text" name="order_date" class="form-control" value="<?php echo $p_date; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Costumer Contact</label>

<div class="col-md-6">

<input type="text" name="order_date" class="form-control" value="<?php echo $p_contact; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Costumer Address</label>

<div class="col-md-6">

<input type="text" name="order_date" class="form-control" value="<?php echo $p_add; ?>"readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Order Status</label>

<div class="col-md-6">

<select name="order_status" class="form-control" >

<option><?php echo $p_stat; ?></option>
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

<label class="col-md-3 control-label">Picture</label>

<div class="col-md-6">

<input type="text" name="cake_label" class="form-control" value="<?php echo $p_img; ?>" readonly>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Now" class="btn btn-primary form-control" >

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

$status = $_POST['order_status'];



$update_p_cat = "update customized_order set order_status`='$status' where order_id='$p_or'";

$run_p_cat = mysqli_query($con,$update_p_cat);

if($run_p_cat){

echo "<script>alert('Product Category has been Updated')</script>";

echo "<script>window.open('index.php?view_p_cats','_self')</script>";

}



}



?>


<?php } ?>