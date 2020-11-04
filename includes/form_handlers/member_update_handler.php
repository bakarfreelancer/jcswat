<?php
$_SESSION['successMemberUpdate'] = 0; //will be 1 if member data updated successfully and 2 if data updating failed
if(isset($_POST['member_update'])){
    $update_first_name = $_POST['update_first_name'];
    $update_last_name = $_POST['update_last_name'];
    $update_email = $_POST['update_email'];
    $update_role = $_POST['update_role'];
    $update_status = $_POST['update_status'];
    $id = $_GET['id'];
    $query = "UPDATE users SET
                first_name = '$update_first_name',
                last_name = '$update_last_name',
                email = '$update_email',
                is_active = '$update_status',
                role = '$update_role',
                WHERE s_no = '$id'
    ";
    $e_check = mysqli_query($conn, "SELECT email FROM users WHERE email = '$update_email'"); //email checking
    $num_rows = mysqli_num_rows($e_check); //no of users contain the entered email
    if($num_rows < 2 ) { //to ensure that only one user have the entered email
        $self_e_check = mysqli_query($conn, "SELECT email FROM users WHERE s_no = '$id'"); //to check that wether the mail entered is of the current selected user whom result is going to be updated
        $self_e_check_array = mysqli_fetch_array($self_e_check); //store result email in array
        if($self_e_check_array['email'] == $update_email){ //will run this query if email is of the same selected user
             $insert_query= mysqli_query($conn, "UPDATE users SET first_name ='$update_first_name', last_name = '$update_last_name', email = '$update_email', is_active = '$update_status', role = '$update_role' WHERE s_no = '$id'");
            if($insert_query) $_SESSION['successMemberUpdate'] = 1;
        }else if($num_rows < 1){ //will run this query if entered email is not present in database
            $insert_query= mysqli_query($conn, "UPDATE users SET first_name ='$update_first_name', last_name = '$update_last_name', email = '$update_email', is_active = '$update_status', role = '$update_role' WHERE s_no = '$id'");
            if($insert_query) $_SESSION['successMemberUpdate'] = 1;
        }else{//will give error if new entered email already exist in database and in use of other member
            $_SESSION['successMemberUpdate'] = 2;
        }
    }
    else{//will give error if email is not unique
        $_SESSION['successMemberUpdate'] = 2;
    }
}
?>