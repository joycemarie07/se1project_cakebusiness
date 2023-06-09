<h4 class="text-center pt-2">All Payments</h4>
    <table class="table table-bordered-mt-5">
      <thead class="bg-secondary text-light">
        <?php
        $get_payments="Select * from `user_payments`";
        $result=mysqli_query($con,$get_payments);
        $row_count=mysqli_num_rows($result);

      if($row_count==0){
        echo "<h2 class='bg-secondary text-center mt-5'> No payments yet </h2>";
      }
      else{
        echo "<tr>
            <th> Serial Number</th>
            <th> Invoice Number</th>
            <th> Payment Received </th> 
            <th> Mode of Payment</th>
            <th> Date of Order</th>
            <th> Delete </th>
          </tr>
      </thead>

      <tbody>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
          $order_id=$row_data['order_id'];
          $payment_id=$row_data['payment_id'];
          $invoice_number=$row_data['invoice_number'];
          $due_amount=$row_data['due_amount'];
          $payment_mode=$row_data['payment_mode'];
          $date=$row_data['date'];
          $number++;
          echo " <tr>
          <td>$number</td>
          <td>$invoice_number</td>
          <td>$due_amount</td>
          <td>$payment_mode</td>
          <td>$date</td>
          <td><a href=''><i class='fa-solid fa-trash' style='color:bisque'></i></a></td>

        </tr>";
      }
    }
        ?>
       
      </tbody>
    </table>