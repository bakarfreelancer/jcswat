<nav class="navbar navbar-expand-lg navbar-light bg-light dashboardHeader">
  <div class="container">
  <a class="navbar-brand" href="dashboard.php"><img src="assets/images/logodashboard.png" class="dashboardLogo" alt="JC Swat dashboard"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mainMenu" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a  class="nav-link" href="index.php"><i class="far fa-eye"></i> View Site <span class="sr-only">(current)</span></a>
      </li>
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