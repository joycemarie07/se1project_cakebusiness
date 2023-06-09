<?php
if(isset($_GET['edit_account'])){
  $user_session_name=$_SESSION['username'];
  $select_query="Select * from `user_table` where user_name='$user_session_name'";
  $result_query=mysqli_query($con,$select_query);
  $row_fetch=mysqli_fetch_assoc($result_query);
  $user_id=$row_fetch['user_id'];
  $user_name=$row_fetch['user_name'];
  $user_email=$row_fetch['user_email'];
  $user_address=$row_fetch['user_address'];
  $user_contact=$row_fetch['user_contact'];
}
  if(isset($_POST['user_update'])){
  $update_id=$user_id;
  $user_name=$_POST['user_username'];
  $user_email=$_POST['user_email'];
  $user_address=$_POST['user_address'];
  $user_contact=$_POST['user_contact'];

  $update_data="update `user_table` set user_name='$user_name',user_email='$user_email', user_address='$user_address', user_contact='$user_contact'
  where user_id=$update_id";
  $result_query_update=mysqli_query($con,$update_data);
  if($result_query_update){
    echo "<script>alert('Data updated successfully.') </script>";
    echo "<script>window.open('user_logout.php','_self') </script>";


    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome <?php echo $_SESSION['username'] ?>
    </title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
   
  <h2 class="text-center">Edit Account</h2>
  <form action="" method="post" class="text-center">
    <div class="form-outline mb-4">
      <input type="text" class="form-control m-auto w-50" value="<?php echo $user_name?>" name="user_username">
    </div>
    <div class="form-outline mb-4">
      <input type="email" class="form-control m-auto w-50" value="<?php echo $user_email?>" name="user_email">
    </div>
    <div class="form-outline mb-4">
      <input type="text" class="form-control m-auto w-50" value="<?php echo $user_address?>" name="user_address">
    </div>
    <div class="form-outline mb-4">
    <input type="text" class="form-control m-auto w-50" value="<?php echo $user_contact?>" name="user_contact">
    </div>

    <input type="submit" value="Update" class="bg-secondary py-2 px-3 border-0 text-light" name="user_update">

  </form>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
