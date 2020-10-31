<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
  <a class="navbar-brand" href="index.php"><img src="assets/images/logo_300.png" class="logo" alt="JC Swat"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mainMenu" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a  class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-university"></i>
          Departments
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=csdept">Computer Science</a>
          <a class="dropdown-item" href="index.php?page=urdudept">Urdu</a>
          <a class="dropdown-item" href="index.php?page=statistic">Statistics</a>
          <a class="dropdown-item" href="index.php?page=english">English</a>
          <a class="dropdown-item" href="index.php?page=physics">Physics</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=about"><i class="fas fa-info-circle"></i> About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=contact"><i class="fas fa-phone-square-alt"></i> Contact</a>
      </li> 
      <!-- login users     -->
      <?php
      if(isset($_SESSION['role'])){
        echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> '.$_SESSION['first_name'].'</a>';
      }else{
        echo '<li class="nav-item">
        <a class="nav-link" href="index.php?page=login"><i class="fas fa-sign-in-alt"></i> Login</a>
      </li>';
      }
      if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin'){
          echo ' <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>';
        }else{
          echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=user_profile&id='.$_SESSION['id'].'"><i class="fas fa-id-card"></i> Profile</a>';
        }
      }
        if(isset($_SESSION['role'])){
          echo '<a class="dropdown-item" href="#"><span class="text-danger" data-toggle="modal" data-target="#logoutModal" ><i class="fas fa-sign-out-alt"></i> Log Out</span></a>
          </div>
        </li>';
        }
        ?>
        </ul>
  </div>
  </div>
</nav>
<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">LOGOUT?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-pr" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-danger"><a href="index.php?page=logout"><span class="text-white">YES LOGOUT</span></a></button>
      </div>
    </div>
  </div>
</div>
<div class="firstSec" style="height:400px; display:none;">
</div>
<div class="secondSec " style="height:400px; display:none;"></div>