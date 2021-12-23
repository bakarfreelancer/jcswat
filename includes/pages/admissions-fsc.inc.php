<?php
    $sql = "SELECT fsc_admissions.*, users.first_name, users.last_name FROM fsc_admissions INNER JOIN users ON fsc_admissions.user_id = users.s_no";
    $register_search_query = mysqli_query($conn, $sql);
    $no_of_admissions = mysqli_num_rows($register_search_query);
?>
<div class="overflow-auto">
    <h2 class="mb-3 text-center">FA/FSc Admissions details</h2>
    <?php
        if(isset($no_of_admissions)){
            if($no_of_admissions < 1){
                echo '<h4 class="text-center text-danger">No result found!</h4>';
            }else{
                $counter=1;
        echo '<table class="regSearchTable mx-auto">
            <tr class="tableHeadRow">
              <th class="sno">S.No</th>
              <th class="name">Name</th>
              <th class="name">Father name</th>   
              <th class="gender">Gender</th>   
              <th class="contact">Contact no</th>   
              <th class="address">Address</th>  
              <th class="group">Metric group</th>  
              <th class="marks">Metric marks obt</th>  
              <th class="marks">Metric total marks</th>  
              <th class="board">Metric board</th>  
              <th class="group">Applied for</th>  
            </tr>';               
            while($row = mysqli_fetch_array($register_search_query)){
                echo '<tr>';
                echo '<td>';
                if($counter<10)echo '0'.$counter;
                else echo $counter;
                echo '</td>';
                echo '<td>'.$row['first_name'].' '. $row['last_name'].'</td>';
                echo '<td>'.$row['f_name'].'</td>';
                echo '<td>'.$row['gender'].'</td>';
                echo '<td>'.$row['contact_no'].'</td>';
                echo '<td>'.$row['address'].'</td>';
                echo '<td>'.$row['matric_group'].'</td>';
                echo '<td>'.$row['matric_marks_obtain'].'</td>';
                echo '<td>'.$row['matric_total_marks'].'</td>';
                echo '<td>'.$row['matric_board'].'</td>';
                echo '<td>'.$row['deptt'].'</td>';
                echo '<td>';
                echo '</tr>';
                $counter++;
            }
        echo "</table>";
            }
        }
        ?>
</div>