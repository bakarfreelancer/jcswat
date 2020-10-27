<?php
$get_members_query = mysqli_query($conn, 'SELECT * FROM users ORDER BY role');
// $membersArray = mysqli_fetch_all($get_members_query);
?>
<div class="container-fluid">
    <div class="container">
        <h2 class="text-center my-4">Members</h2>
        <div>
        <?php
         if(mysqli_num_rows($get_members_query) > 0){
             $counter=1;
        echo '<table class="membersTable mx-auto">
            <tr class="tableHeadRow">
              <th class="sno">S.No</th>
              <th class="name">Name</th>
              <th class="email">Email</th>   
              <th class="role">Role</th>   
              <th class="status">Status</th>
              <th class="edit">Edit</th>   
              <th class="delete">Delete</th>   
            </tr>';               
            while($row = mysqli_fetch_array($get_members_query)){
                echo '<tr>';
                echo '<td>';
                if($counter<10)echo '0'.$counter;
                else echo $counter;
                echo '</td>';
                echo '<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['role'].'</td>';
                echo '<td>';
                if($row['is_active']==1)echo 'Active';
                else echo 'Disabled';
                echo '</td>';
                echo '<td><a href="dashboard.php?page=member_edit&id=';
                echo $row['s_no'];
                echo '" class="btn btn-pr">Edit</a></td>';
                echo '<td><a href="#" class="btn btn-danger text-uppercase">Delete</a></td>';
                echo '</tr>';
                $counter++;
            }
        echo "</table>";
        }
        ?>
        </>
    </div>
</div>