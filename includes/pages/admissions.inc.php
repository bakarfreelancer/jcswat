<div class="spacer"></div>
<div class="spacer"></div>
<h2 class="text-center my-4">Admissions</h2>
<div class="container-fluid">
    <div class="container">
        <div class="text-center">
            <h3>Search Registration By Contact number</h3>
            <form class="form-inline justify-content-center my-3" action="index.php?page=admissions" method="POST">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="number" name="register_search" class="form-control" placeholder="Contact no">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <select name="register_search_cat" id="">
                        <option value="fsc_admissions">FA/FSc</option>
                        <option value="bs_admissions">BS</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-pr mb-2"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="overflow-auto">
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
              <th class="board">Metric board</th>';  
            if($register_search_cat == 'bs_admissions'){
                echo '<th class="group">FA/FSc group</th>  
                <th class="marks">FSc marks obt</th>  
                <th class="marks">FA/FSc total marks</th>  
                <th class="board">FA/FSc board</th>';        
            }
              echo '<th class="group">Applied for</th>  
            </tr>';               
            while($row = mysqli_fetch_array($register_search_query)){
                echo '<tr>';
                echo '<td>';
                if($counter<10)echo '0'.$counter;
                else echo $counter;
                echo '</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['f_name'].'</td>';
                echo '<td>'.$row['gender'].'</td>';
                echo '<td>'.$row['contact_no'].'</td>';
                echo '<td>'.$row['address'].'</td>';
                echo '<td>'.$row['matric_group'].'</td>';
                echo '<td>'.$row['matric_marks_obtain'].'</td>';
                echo '<td>'.$row['matric_total_marks'].'</td>';
                echo '<td>'.$row['matric_board'].'</td>';
                if($register_search_cat == 'bs_admissions'){
                    echo '<td>'.$row['fsc_group'].'</td>';
                    echo '<td>'.$row['marks_obtain'].'</td>';
                    echo '<td>'.$row['total_marks'].'</td>';
                    echo '<td>'.$row['board'].'</td>';
                }
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
        <div class="row">
            <div class="col-md-3 col-sm-7 mx-auto">
                <a href="index.php?page=fsc_admission">
                    <div class="admissionCategory">
                        FA/FSc
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-7 mx-auto">
                <a href="index.php?page=bs_admission">
                    <div class="admissionCategory">
                        BS
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-7 mx-auto">
                <div class="admissionCategory">
                    Hostel
                </div>
            </div>
        </div>
    </div>
</div>