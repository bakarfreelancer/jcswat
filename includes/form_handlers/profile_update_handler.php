<?php
//this page works same as member_update_handler
$_SESSION['successUpdate'] = 0;
if(isset($_POST['profile_update'])){
    $update_first_name = $_POST['update_first_name'];
    $update_last_name = $_POST['update_last_name'];
    $update_email = $_POST['update_email'];
    $update_status = $_POST['update_status'];
    if($_POST['update_pass'] !== '')
    $update_pass = md5($_POST['update_pass']);
    else $update_pass = $_SESSION['pass'];
    $id = $_SESSION['id'];
    $query = "UPDATE users SET
                first_name = '$update_first_name',
                last_name = '$update_last_name',
                email = '$update_email',
                is_active = '$update_status',
                pass = '$update_pass',
                WHERE s_no = '$id'
    ";
    $e_check = mysqli_query($conn, "SELECT email FROM users WHERE email = '$update_email'");
    $num_rows = mysqli_num_rows($e_check);
    if($num_rows < 2 ) {
        $self_e_check = mysqli_query($conn, "SELECT email FROM users WHERE s_no = '$id'");
        $self_e_check_array = mysqli_fetch_array($self_e_check);
        if($self_e_check_array['email'] == $update_email){
             $insert_query= mysqli_query($conn, "UPDATE users SET first_name ='$update_first_name', last_name = '$update_last_name', email = '$update_email', is_active = '$update_status', password = '$update_pass' WHERE s_no = '$id'");
            if($insert_query) $_SESSION['successUpdate'] = 1;
        }else if($num_rows < 1){
            $insert_query= mysqli_query($conn, "UPDATE users SET first_name ='$update_first_name', last_name = '$update_last_name', email = '$update_email', is_active = '$update_status', password = '$update_pass' WHERE s_no = '$id'");
            if($insert_query) $_SESSION['successUpdate'] = 1;
        }else{
            $_SESSION['successUpdate'] = 2;
        }
    }
    else{
        $_SESSION['successUpdate'] = 2;
    }
}
?>