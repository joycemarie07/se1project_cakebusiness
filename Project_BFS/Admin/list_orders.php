<h4 class="text-center pt-2">All Orders</h4>
    <table class="table table-bordered-mt-5">
      <thead class="bg-secondary text-light">
        <?php
        $get_orders="Select * from `user_orders`";
        $result=mysqli_query($con,$get_orders);
        $row_count=mysqli_num_rows($result);

      if($row_count==0){
        echo "<h2 class='bg-secondary text-center mt-5'> No orders yet </h2>";
      }
      else{
        echo "<tr>
            <th> Serial Number</th>
            <th> Due Amount</th>
            <th> Invoice Number</th>
            <th> Items Ordered</th>
            <th> Date of Order</th>
            <th> Status</th>
            <th> Delete </th>
          </tr>
      </thead>

      <tbody>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
          $order_id=$row_data['order_id'];
          $user_id=$row_data['user_id'];
          $due_amount=$row_data['due_amount'];
          $invoice_number=$row_data['invoice_number'];
          $total_orders=$row_data['total_orders'];
          $order_date=$row_data['order_date'];
          $order_status=$row_data['order_status'];
          $number++;
          echo " <tr>
          <td>$number</td>
          <td>$due_amount</td>
          <td>$invoice_number</td>
          <td>$total_orders</td>
          <td>$order_date</td>
          <td>$order_status</td>
          <td><a href=''><i class='fa-solid fa-trash' style='color:bisque'></i></a></td>

        </tr>";
      }
    }
        ?>
       
      </tbody>
    </table>