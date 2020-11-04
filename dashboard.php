<?php
require 'config/config.php';
require 'config/functions.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
require 'includes/form_handlers/member_update_handler.php';
require 'includes/form_handlers/profile_update_handler.php';
require 'includes/form_handlers/add_news_handler.php';
require 'includes/form_handlers/update_news_handler.php';
if($_SESSION['role'] != 'admin'){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP LINKS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CUSTOM CSS LINK -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/dashboard.css">
    <link rel="stylesheet" href="./assets/css/dashboardSidebar.css">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JQUERY NUMBER COUNTER -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- JQUERY WAYPOINTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <!-- CUSTOM JS MAIN.JS -->
    <script src="assets/js/main.js"></script>

    <title>Dashboard JC Swat</title>
</head>
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" style="z-index:999;" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">JC Swat</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <a href="dashboard.php?page=profile&id=<?php echo $_SESSION['id']; ?>">
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="assets/images/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <?php if(isset($_SESSION['first_name']))
              echo $_SESSION['first_name'].' <strong>'.$_SESSION['last_name'].'</strong>';
            ?>
          </span>
          <span class="user-role">
          <?php if(isset($_SESSION['role']))
              echo $_SESSION['role'];
            ?>
          </span>
        </div>
      </div>
      </a>
      <!-- sidebar-header  -->
      <!-- <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div> -->
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <!-- <span>General</span> -->
          </li>
          <li>
          <a href="index.php" target="_blank">
          <i class="far fa-eye"></i> <span>Visit Site</span>
            </a>
          </li>
          <li>
          <a href="dashboard.php">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fas fa-calendar-alt"></i>
              <span>News</span>
            </a>
            <div class="sidebar-submenu">
              <ul class="newsSub">
                <li>
                  <a href="dashboard.php?page=add_news"><i class="fas fa-plus"></i> Add news</a>
                </li>
                <li>
                  <a href="dashboard.php?page=news"><i class="fas fa-eye"></i>View all</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
          <a href="dashboard.php?page=members">
          <i class="fas fa-users"></i>
              <span>Members</span>
            </a>
          </li>

          <!---------------------------->
          <!-- <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li> -->
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
  <?php
      include './includes/components/dashboard_header.php';
    ?>
    <div class="container-fluid">
    <?php
$pages_folder = 'includes/pages';
if(isset($_GET['page'])){
    
    $page_name = $_GET['page'];
    $scaned_pages=scandir($pages_folder);
    unset($scaned_pages[0],$scaned_pages[1]);
    if(in_array($page_name.'.inc.php',$scaned_pages)){
        include 'includes/pages/'.$page_name.'.inc.php';

    }else{
        include 'includes/pages/notfound.inc.php';  
    }
}else{
    include 'includes/pages/dashboard.inc.php';
}
?>
        </div>
        <?php
      include './includes/components/dashboard_footer.php'; //Include footer file
    ?>
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- CUSTOM FILES -->
<script rel="text/javascript" src="assets/js/main.js"></script>
<!-- HOVER DROPDOWN -->
<script rel="text/javascript" src="assets/js/jquery/dropdown.js"></script>
<script rel="text/javascript" src="assets/js/jquery/dashboardSidebar.js"></script>

<!-- BOOTSTRAP JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>