<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <input type="text" name="name" value="<?=$student['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Email</label>
                                        <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Phone</label>
                                        <input type="text" name="phone" value="<?=$student['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Course</label>
                                        <input type="text" name="course" value="<?=$student['course'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                                <?php

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Edit Orders

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

<label class="col-md-3 control-label">Order Id.</label>

<div class="col-md-6">

<input type="text" name="order_id" class="form-control" value="<?php echo $o_id; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Costumer Id</label>

<div class="col-md-6">

<input type="text" name="costumer_id" class="form-control" value="<?php echo $c_id; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Due Amount</label>

<div class="col-md-6">

<input type="text" name="due_amount" class="form-control" value="<?php echo $o_amount; ?>">

</div>

</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Invoice No</label>

<div class="col-md-6">

<input type="text" name="invoice_no" class="form-control" value="<?php echo $o_invoice; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Quantity</label>

<div class="col-md-6">

<input type="text" name="qty" class="form-control" value="<?php echo $o_qty; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Size</label>

<div class="col-md-6">

<input type="text" name="size" class="form-control" value="<?php echo $o_size; ?>">

</div>

</div>

<!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Order Date</label>

<div class="col-md-6">

<input type="text" name="order_date" class="form-control" value="<?php echo $o_date; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Order Status</label>

<div class="col-md-6">

<input type="text" name="order_status" class="form-control" value="<?php echo $o_status; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Cake Label</label>

<div class="col-md-6">

<input type="text" name="cake_label" class="form-control" value="<?php echo $o_label; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Flavor</label>

<div class="col-md-6">

<input type="text" name="flavor" class="form-control" value="<?php echo $o_flavor; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Order" class="btn btn-primary form-control">

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

$costumer_id = $_POST['costumer_id'];

$due_amount = $_POST['due_amount'];

$invoice_no = $_POST['invoice_no'];

$qty = $_POST['qty'];

$size = $_POST['size'];

$order_date = $_POST['order_date'];

$order_status = $_POST['order_status'];

$cake_label = $_POST['cake_label'];

$flavor = $_POST['flavor'];

$update_order = "update pending_orders set cat_title='$cat_title',cat_top='$cat_top',cat_image='$cat_image' where cat_id='$c_id'";

$run_order = mysqli_query($con,$update_order);

if($run_cat){

echo "<script>alert('One Category Has Been Updated')</script>";

echo "<script>window.open('index.php?view_order','_self')</script>";

}

}



?>

<?php } ?>