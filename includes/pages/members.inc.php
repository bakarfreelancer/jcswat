<?php
$userIdForDeletion =0;
$get_members_query = mysqli_query($conn, 'SELECT * FROM users ORDER BY role');
// $membersArray = mysqli_fetch_all($get_members_query);
?>
<div class="container-fluid">
    <div class="container">

    <!-- success member delete alert -->
    <?php
    if($_SESSION['successDelete'] == 1 || $_SESSION['successUpdate'] == 1){
        echo '<div class="alert alert-success successDeleteMember" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>';
        if($_SESSION['successDelete'] == 1){
            echo 'Deleted!</strong> You have deleted member successfully!';
            $_SESSION['successDelete'] = 0;
        }elseif($_SESSION['successUpdate'] == 1){
            echo 'Updated!</strong> You have updated member data successfully!';
            $_SESSION['successUpdate'] = 0;
        }
    echo '</div>';
    }
    ?>
        <h2 class="text-center my-4">Members</h2>
        <div style="overflow-x: auto;">
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
                if($row['role']=='subscriber'){
                    echo '<td><a href="dashboard.php?page=member_delete&id='. $row['s_no'] .'" class="btn btn-danger text-uppercase"  >Delete</a></td>';
                }else{
                    echo '<td><a href="#" class="btn btn-danger text-uppercase" data-toggle="modal" data-target="#adminDeleteModal" >Delete</a></td>';
                }
                echo '</tr>';
                $counter++;
            }
        echo "</table>";
        }
        ?>
        </>
    </div>
</div>
<!-- Admin Delete Modal -->
<div class="modal fade" id="adminDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">ERROR?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are not allow to delete admin.<br>
        First change the role of <b>ADMIN</b> to <b>SUBSCRIBER</b> and then delete. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-pr" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>