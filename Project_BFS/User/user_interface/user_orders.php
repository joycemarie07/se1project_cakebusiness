<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome <?php echo $_SESSION['username'] ?>
    </title>
  </head>
  <body class="mx-auto">
    <?php
$username=$_SESSION['username'];
$get_user="Select * from `user_table` where user_name='$username'";
$result=mysqli_query($con,$get_user);
$row_fetch=mysqli_fetch_assoc($result);
$user_id=$row_fetch['user_id'];

?>
    <h3 class="text-success text-center pt-4"> All my orders </h3>
    <table class="table table-bordered mt-5">
      <thead class="bg-secondary text-light">
      <tr>
        <th>Serial No.</th>
        <th>Total Amount</th>
        <th>Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Payment</th>
        <th>Status</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $get_order_details="Select * from `user_orders` where user_id='$user_id'";
        $result_orders=mysqli_query($con,$get_order_details);
        $number=1;
        while($row_orders=mysqli_fetch_assoc($result_orders)){
          $order_id=$row_orders['order_id'];
          $due_amount=$row_orders['due_amount'];
          $due_amount=$row_orders['due_amount'];
          $invoice_number=$row_orders['invoice_number'];
          $total_orders=$row_orders['total_orders'];
          $order_status=$row_orders['order_status'];
          if($order_status=='pending'){
            $order_status='Incomplete';
          }else{
            $order_status='Complete';

          }
          $order_date=$row_orders['order_date'];

          echo "<tr>
          <td>$number</td>
          <td>$due_amount</td>
          <td>$total_orders</td>
          <td>$invoice_number</td>
          <td>$order_date</td>
          <td>$order_status</td>";
          ?>
          <?php
          if($order_status=='Complete'){
            echo "<td> Paid </td>";
          }else{
            echo "<td><a href='confirm_payment.php?order_id=$order_id'> Confirm </a></td>
            </tr>";
          }
        $number++;
        }
        
?>
      </tbody>
    </table>
  </body>
</html>