
    <h4 class="text-center pt-2">Product Lists</h4>
    <table class="table table-bordered-mt-5">
      <thead class="bg-secondary text-light">
        <tr>
            <th> Product ID</th>
            <th> Product Name</th>
            <th> Product Image</th>
            <th> Product Price</th>
            <th> Total Sales</th>
            <th> Status</th>
            <th> Edit </th>
            <th> Delete </th>


        </tr>
      </thead>
      <tbody class="">
        <?php
        $get_products="Select * from `products`";
        $result=mysqli_query($con,$get_products);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_image=$row['product_image'];
          $product_price=$row['product_price'];
          $product_id=$row['product_id'];
          $status=$row['status'];
          $number++;
          ?>
          <tr class='text-center'>
          <td><?php echo $number ?></td>
          <td><?php echo $product_title ?></td>
          <td><img src='./product_image/<?php echo $product_image; ?>' class='product_image'> </td>
          <td><?php echo $product_price ?></td>
          <td><?php 
          $get_count="Select * from `pending_orders`  where product_id=$product_id";
          $result_count=mysqli_query($con,$get_count);
          $rows_count=mysqli_num_rows($result_count);
          echo $rows_count;

          ?></td>
          <td><?php echo $status ?></td>
          <td><a href='index.php?change_products=<?php echo $product_id  ?>'><i class='fa-solid fa-pen-to-square' style='color:bisque'></i></a></td>
          <td><a href='index.php?delete_products=<?php echo $product_id ?>' type="button" class="" data-toggle="modal" data-target="#exampleModal"><i class='fa-solid fa-trash' style='color:bisque'></i></a></td>

        </tr>
         <?php
        }
        ?>
      </tbody>
    </table>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4> Are you sure you want to delete this? </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary text-light" data-dismiss="modal"><a href="./view_products.php?view_products" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-secondary text-light"><a href='index.php?delete_products=<?php echo $product_id ?>' class=""></a>
Yes</a></button>
      </div>
    </div>
  </div>
</div>
 