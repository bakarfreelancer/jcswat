<?php
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
        <h3 class="text-center d-inline-block">EDIT MEMBER DETAILS</h3>
      </span>
    </div>
    <div class="editMember col-md-8 mx-auto">
    <form class="needs-validation editMemberForm contactForm" method="POST" action="dashboard.php?page=members&id=<?php echo $member_data['s_no'];?>" novalidate>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="memberFirstName">First name</label>
                <input type="text" class="form-control" id="memberFirstName" name="update_first_name" value="<?php if(isset($member_data['first_name']))echo $member_data['first_name']; ?>" placeholder="First Name"
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="memberLastName">Last name</label>
                <input type="text" class="form-control" id="memberLastName" name="update_last_name" value="<?php if(isset($member_data['last_name']))echo $member_data['last_name']; ?>" placeholder="Last Name"
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
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
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="memberRole">Role</label>
                <select class="form-control custom-select" id="memberRole" name="update_role"
                  required>
                  <option value="<?php if(isset($member_data['role']))echo $member_data['role']; ?>" selected>
                  <?php if(isset($member_data['role']))echo $member_data['role']; ?>
                    </option>
                  <option 
                  value="<?php
                   if(isset($member_data['role'])){
                       if($member_data['role'] == 'admin')
                       echo 'subscriber';
                       else echo 'admin';
                   } 
                   ?>">
                    <?php
                   if(isset($member_data['role'])){
                    if($member_data['role'] == 'admin')
                    echo 'subscriber';
                    else echo 'admin';
                   } 
                   ?>   
                </option>
                </select>
                <div class="invalid-feedback">
                  Please select valid role.
                </div>
              </div>
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
            <button class="btn btn-block btn-pr" type="submit" value="member_update" name="member_update">Update <i class="fas fa-user-edit"></i></button>
          </form>
    </div>
</div>