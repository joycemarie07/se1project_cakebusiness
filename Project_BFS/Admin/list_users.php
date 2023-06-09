<h4 class="text-center pt-2">All Users</h4>
    <table class="table table-bordered-mt-5">
      <thead class="bg-secondary text-light">
        <?php
        $get_payments="Select * from `user_table`";
        $result=mysqli_query($con,$get_payments);
        $row_count=mysqli_num_rows($result);

      if($row_count==0){
        echo "<h2 class='bg-secondary text-center mt-5'> No users yet </h2>";
      }
      else{
        echo "<tr>
            <th> Serial Number</th>
            <th> User Name</th>
            <th> User Email</th> 
            <th> User Address</th>
            <th> User Contact</th>
            <th> Delete </th>
          </tr>
      </thead>

      <tbody>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
          $user_id=$row_data['user_id'];
          $user_name=$row_data['user_name'];
          $user_email=$row_data['user_email'];
          $user_address=$row_data['user_address'];
          $user_contact=$row_data['user_contact'];
          $number++;
          echo " <tr>
          <td>$number</td>
          <td>$user_name</td>
          <td>$user_email</td>
          <td>$user_address</td>
          <td>$user_contact</td>
          <td><a href=''><i class='fa-solid fa-trash' style='color:bisque'></i></a></td>

        </tr>";
      }
    }
        ?>
       
      </tbody>
    </table>