<?php 

  if(isset($_GET['change_products'])){
    $edit_id=$_GET['change_products'];
    $get_data="Select * from `products` where product_id='$edit_id'";
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_keyword=$row['product_keyword'];
    $product_image=$row['product_image'];
    $product_price=$row['product_price'];

  }
?>

<div class="container mt-5">
  <h1 class="text-center">Edit Product</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline w-50 m-auto mb-4">
      <label for="product_title" class="form-label"> Product Title </label>
      <input type="text" id="product_title" value="<?php echo $product_title?>" name="product_title" class="form-control" required>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
      <label for="product_description" class="form-label"> Product Description </label>
      <input type="text" id="product_description" value="<?php echo $product_description?>" name="product_description" class="form-control" required>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
      <label for="product_keyword" class="form-label"> Product Keywords </label>
      <input type="text" id="product_keyword" value="<?php echo $product_keyword?>" name="product_keyword" class="form-control" required>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
      <label for="product_image" class="form-label"> Product Image </label>
      <div class="d-flex">
      <input type="file" id="product_image" name="product_image" class="form-control w-90 m-auto" required>
      <img src="./product_image/<?php echo $product_image?>" alt="" class="edit_image">
      </div>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
      <label for="product_price" class="form-label"> Product Price </label>
      <input type="text" id="product_price" value="<?php echo $product_price?>" name="product_price" class="form-control" required>
    </div>
    <div class="w-50 m-auto">
      <input type="submit" name="change_products" value="Update Product Info" class="bg-secondary px-3 py-2 border-0 text-light" required>
    </div>  
  </form>
</div>

<?php
 if(isset($_POST['change_products'])){
  $product_title=$_POST['product_title'];
  $product_description=$_POST['product_description'];
  $product_keyword=$_POST['product_keyword'];
  $product_price=$_POST['product_price'];
  $product_image=$_FILES['product_image']['name'];
  $temp_image=$_FILES['product_image']['tmp_name']; 

  if($product_title=='' or $product_description=='' or $product_keyword=='' or $product_image=='' or
  $product_price==''){
    echo "<script> alert('Please fill all the fields') </script>";
  }
  else{  
    move_uploaded_file($temp_image, "./product_image/$product_image");

    $update_product="update `products` set product_title='$product_title', product_description='$product_description',
    product_keyword='$product_keyword',product_image='$product_image', product_price='$product_price', date=NOW() 
    where product_id=$edit_id";
    $result_update=mysqli_query($con,$update_product);
    if($result_update){ 
    echo "<script> alert('Product updated successfully!') </script>";
    echo "<script>window.open('edit_products.php','_self') </script>";
    }
  }
 } 

?>