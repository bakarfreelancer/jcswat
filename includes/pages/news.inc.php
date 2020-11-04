<?php
include 'includes/form_handlers/add_news_handler.php';
//this page is common for both visitors and admin dashboard, so if an admin is logged in it will show delete edit and add news options else it will only show news.
$get_news_query = mysqli_query($conn, 'SELECT * FROM event_news ORDER BY publish_date DESC');
if($_SESSION['role'] != 'admin'){
  echo '<div class="spacer"></div>';
  echo '<div class="spacer"></div>';
}
?>
<div class="container-fluid">
<?php
  if(isset($_SESSION['delete_news'])){// if some news deleted successfully if will show message
    if($_SESSION['delete_news'] == 1){
      echo '<div class="alert alert-success successDeleteMember" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Deleted!</strong> You have deleted news successfully!</div>';
      $_SESSION['delete_news'] = 0;
  }
  }
  if(isset($_SESSION['addedNewsI'])){
    if($_SESSION['addedNewsI'] == 1){// will show news added message
      echo '<div class="alert alert-success successDeleteMember" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Added!</strong> You have added news successfully!</div>';
      // $_SESSION['addedNewsI'] = 0;
    }

    //will show error message for more characters while inserting news
    if($_SESSION['addedNewsI'] == 2){
      echo '<div class="alert alert-danger successDeleteMember" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Error!</strong> News Description must be less than 255 characters!</div>';
      // $_SESSION['addedNewsI'] = 0;
    }
  }

  if(isset($_GET['msg'])){
    if($_GET['msg'] == 1){// will show news added message
      echo '<div class="alert alert-success successDeleteMember" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Added!</strong> You have added news successfully!</div>';
      // $_SESSION['addedNewsI'] = 0;
    }

    //will show error message for more characters while inserting news
    if($_GET['msg'] == 2){
      echo '<div class="alert alert-danger successDeleteMember" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Error!</strong> News Description must be less than 255 characters!</div>';
      // $_SESSION['addedNewsI'] = 0;
    }
  }

  if(isset($_SESSION['updateNews'])){
    if($_SESSION['updateNews'] == 1){//will show success message for news updating
      echo '<div class="alert alert-success successDeleteMember" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Updated!</strong> You have updated news successfully!</div>';
      $_SESSION['updateNews'] = 0;
  }else if($_SESSION['updateNews'] == 2){//will show error message for news updating
    echo '<div class="alert alert-danger successDeleteMember" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Error!</strong> News title and description must be less than 255 characters!</div>';
    $_SESSION['updateNews'] = 0;
}
  }

if(isset($_SESSION['role'])){
  if($_SESSION['role'] != 'admin'){
  echo '<div class="container">';
}
}else{
    echo '<div class="container">';
}
?>
    <div>
        <span class="text-center my-3 d-block">
          <h3 class="text-center d-inline-block">News</h3>
          <?php 
          if(isset($_SESSION['role'])){//if admin is logged in it will show add news button
            if($_SESSION['role'] == 'admin'){
            echo '<a href="dashboard.php?page=add_news" class="btn btn-pr float-right position-absolute addNews">add news <i class="fas fa-plus"></i></a>';
          }
          }
          ?>
          
      </span>
    </div>
    <div>
        <?php
         if(mysqli_num_rows($get_news_query) > 0){
             $counter = 1;
                    echo '<div class="accordion newsTable" id="news">';
                   while($row = mysqli_fetch_array($get_news_query)){
                       echo '<div class="card">';
                       echo '<div class="card-header bg-pr newsTitlediv" id="';
                       echo $row['s_no'];
                       echo '">';
                       echo '<h2 class="mb-0"><button class="btn text-white btn-block text-left" type="button" data-toggle="collapse" data-target="#c';
                       echo $row['s_no'];
                       echo '"aria-expanded="true" aria-controls="c';
                       echo $row['s_no'];
                       echo '">';
                       if($counter < 10)echo '<b>0'.$counter.' .&nbsp;</b>';
                       else echo '<b>'.$counter.' .&nbsp;</b>';
                       echo $row['title'];
                       echo '</button></h2></div>';
                       echo '<div id="c';
                       echo $row['s_no'];
                       echo '" class="collapse ';
                       if($counter == 1)echo 'show';
                       echo '" data-parent="#news">';
                       echo '<div class="card-body">';
                       echo $row['news_message'];
                       if(isset($_SESSION['role'])){
                        if($_SESSION['role'] == 'admin'){//admin is logged in it will show edit and delete option
                        echo '<div class="mt-3">
                       <a href="dashboard.php?page=news_edit&id='.$row['s_no'].'" class="btn btn-pr">Edit</a>
                       <a href="dashboard.php?page=news_delete&id='.$row['s_no'].'" class="btn btn-danger">DELETE</a>
                       </div>';
                      }
                      }
                       echo '</div></div></div>';
                       $counter++;
                   }
                   echo '</div>';
                }
        ?>
    </div>
<?php
if(isset($_SESSION['role'])){
  if($_SESSION['role'] != 'admin'){
  echo '</div>';
}
}else{
    echo '</div>';
}
?>
</div>
<?php
if(isset($_SESSION['role'])){
  if($_SESSION['role'] != 'admin'){
  echo '<div class="spacer"></div>';
}
}else{
  echo '<div class="spacer"></div>';
}
?>
<!-- ------------------------------------------- -->
<!-- <div class="accordion newsTable" id="news">
  <div class="card">
    <div class="card-header bg-pr newsTitlediv" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-block text-white text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" data-parent="#news">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div> -->