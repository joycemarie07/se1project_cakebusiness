<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");


if(!isset($_SESSION['customer_email'])){

echo "<script>window.open('checkout.php','_self')</script>";

}

else {




?>
<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_country = $row_customer['customer_country'];

$customer_city = $row_customer['customer_city'];

$customer_contact = $row_customer['customer_contact'];

$customer_address = $row_customer['customer_address'];

$customer_image = $row_customer['customer_image'];

?>

<!DOCTYPE html>
<html>
<main>
    <div class="hero">
       
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>
<head>

<title> Insert Products </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>



<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">
<center>
<i class="fa fa-birthday-cake fa-fw"></i> Make Your Cake
</center>
</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Cake Title </label>

<div class="col-md-6" >

<input type="text" name="cake_name" placeholder="Title of your Costumized Cake" class="form-control" required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Cake Flavor </label>

<div class="col-md-6" >

<select name="flavor" class="form-control" >

<option>Chocolate </option>
<option>Mocha</option>
<option>Vanilla</option>
<option>Double Chocolate</option>

</select>


</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Category </label>

<div class="col-md-6" >


<select name="p_cat" class="form-control" >


<?php

$get_p_cat = "select * from product_categories ";

$run_p_cat = mysqli_query($con,$get_p_cat);

while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {

$p_cat_id = $row_p_cat['p_cat_id'];

$p_cat_title = $row_p_cat['p_cat_title'];

echo "<option value='$p_cat_id'>$p_cat_title</option>";

}

?>


</select>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Cake Label </label>

<div class="col-md-6" >
<center> 
<input type="text" name="cake_label" class="form-control" placeholder="Text on the Cake" required >
</center> 
</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Description </label>

<div class="col-md-6" >

<input type="text" name="order_desc" class="form-control" placeholder="Additional Notes for the Cake"required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Date Need </label>

<div class="col-md-6" >

<input type="date" name="order_date"
       value="2022-21-05"
       min="2022-21-05" max="2023-12-31" class="form-control" required>


</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image 1 </label>

<div class="col-md-6" >

<input type="file" name="product_img1" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<center> <strong>User Information </strong></center>
<br>
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Costumer ID </label>

<div class="col-md-6" >

<input type="int" name="customer_id" value="<?php echo $customer_id; ?>" class="form-control" required readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Contact No.</label>

<div class="col-md-6" >

<input type="text" name="costumer_contact" value="<?php echo $customer_contact; ?>" class="form-control" required readonly>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Address</label>

<div class="col-md-6" >

<input type="text" name="costumer_address" value="<?php echo $customer_address; ?>" class="form-control" required readonly>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Add to Costumized Cake" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->


</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends --> 

<?php

include("includes/footer.php");

?>


</body>

</html>

<?php

if(isset($_POST['submit'])){

$cake_name = $_POST['cake_name'];
$flavor = $_POST['flavor'];
$p_cat = $_POST['p_cat'];
$cake_label = $_POST['cake_label'];
$order_desc = $_POST['order_desc'];
$order_date = $_POST['order_date'];
$customer_id = $_POST['customer_id'];
$costumer_contact = $_POST['costumer_contact'];
$costumer_address = $_POST['costumer_address'];
$status = $_POST['status'];

$stats = "Pending";
$product_img1 = $_FILES['product_img1']['name'];


$temp_name1 = $_FILES['product_img1']['tmp_name'];

move_uploaded_file($temp_name1,"customer/newcake/$product_img1");

$insert_customized = "insert into customized_order (cake_name,flavor,p_cat,cake_label,order_desc,order_date,customer_id,costumer_contact,costumer_address,product_img1, status) values ('$cake_name','$flavor',$p_cat,'$cake_label','$order_desc','$order_date','$customer_id','$costumer_contact','$costumer_address','$product_img1', '$stats')";

$run_customized = mysqli_query($con,$insert_customized);

if($run_customized){

echo "<script>alert('Cake has been inserted successfully')</script>";

echo "<script>window.open('index.php?cart','_self')</script>";

}

}

?>
<?php } ?>