<div class="spacer"></div>
<div class="spacer"></div>
<?php
if(!isset($_GET['id']) || $_SESSION['id'] != $_GET['id']){
  echo '<script>location.replace("dashboard.php")</script>';
}
if(isset($_GET['id'])){
$memberId = $_GET['id'];
$member_query = mysqli_query($conn, "SELECT * FROM users WHERE s_no = '$memberId'");
if(mysqli_num_rows($member_query) == 1){
$member_data = mysqli_fetch_array($member_query);
}
}
?>
<div class="contaner-fluid">
    <div>
      <span class="text-center my-3 d-block">
      <a href="dashboard.php?page=members" class="btn btn-pr float-left"><i class="fas fa-arrow-left"></i></a>
        <h3 class="text-center d-inline-block">EDIT YOUR DETAILS</h3>
      </span>
    </div>
    <div class="editMember col-md-8 mx-auto">
    <form class="needs-validation editMemberForm contactForm" method="POST" action="dashboard.php?page=profile&id=<?php echo $member_data['s_no'];?>" novalidate>
            <div class="form-row">
            <!-- FIRST NAME -->
              <div class="col-md-6 mb-3">
                <label for="memberFirstName">First name</label>
                <input type="text" class="form-control" id="memberFirstName" name="update_first_name" value="<?php if(isset($member_data['first_name']))echo $member_data['first_name']; ?>" placeholder="First Name"
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <!-- LAST NAME -->
              <div class="col-md-6 mb-3">
                <label for="memberLastName">Last name</label>
                <input type="text" class="form-control" id="memberLastName" name="update_last_name" value="<?php if(isset($member_data['last_name']))echo $member_data['last_name']; ?>" placeholder="Last Name"
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>

            <!-- EMAIL -->
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="memberEmail">Email</label>
                <input type="email" class="form-control" id="memberEmail" name="update_email" placeholder="user@mail.com"
                value="<?php if(isset($member_data['email']))echo $member_data['email']; ?>"
                  required>
                <div class="invalid-feedback">
                  Please provide correct email.
                </div>
              </div>
            </div>

            <!-- PASSWORD -->
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="memberPass">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="memberPass" name="update_pass" placeholder="***********">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><a onclick="showPassAction()"><i class="passShowIcon fa fa-eye" aria-hidden="true"></i></a></div>
                </div>
                </div>
                <div class="invalid-feedback">
                  Please provide password.
                </div>
              </div>
            </div>

            <!-- STATUS -->
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="memberStatus">Status</label>
                <select class="form-control custom-select" id="memberStatus" name="update_status"
                  required>
                  <option 
                  value="<?php
                   if(isset($member_data['is_active']))echo $member_data['is_active']; 
                   ?>"
                   selected>
                   <?php if(isset($member_data['is_active'])){
                       if($member_data['is_active']==1)
                       echo 'Active';
                       else echo 'Disabled';
                   } ?>
                </option>
                  <option 
                  value="<?php
                    if(isset($member_data['is_active'])){
                        if($member_data['is_active']==1)
                            echo 0;
                            else echo 1;
                    }
                  ?>">
                  <?php if(isset($member_data['is_active'])){
                       if($member_data['is_active']==1)
                       echo 'Disabled';
                       else echo 'Active';
                   } ?>
                  </option>
                </select>
                <div class="invalid-feedback">
                  Please select valid status.
                </div>
              </div>
            </div>
            <button class="btn btn-block btn-pr" type="submit" value="profile_update" name="profile_update">Update <i class="fas fa-user-edit"></i></button>
          </form>
    </div>
</div>

<script>
    function showPassAction() {
    passInputDom = document.getElementById('memberPass');
    iconDom = document.querySelector('.passShowIcon');
    if(passInputDom.type == 'password'){
        passInputDom.type= 'text';
        iconDom.classList.remove('fa-eye');
        iconDom.classList.add('fa-eye-slash');
    }else if(passInputDom.type == 'text'){
        passInputDom.type= 'password';
        iconDom.classList.add('fa-eye');
        iconDom.classList.remove('fa-eye-slash');
    }
}
</script>