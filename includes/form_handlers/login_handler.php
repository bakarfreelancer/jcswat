<?php
session_start();
$_SESSION['successDelete'] = 0;
if(isset($_POST['login'])){
    $email= filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); //FILTER EMAIL TO AVOID SQL INJECTION

    $SESSION['log_email'] = $email; //store email in SESSION

    $password = md5($_POST['log_pass']); //ENCRYPT PASSWORD
    $check_database_query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'"); //CHECK LOGIN DETAILS IN DB
    
    $check_login_query = mysqli_num_rows($check_database_query); //COUNT NO OF RESULT PRESENT FOR GIVEN CREDENTIALS
    if($check_login_query == 1){
        $row = mysqli_fetch_array($check_database_query);
        if($row['is_active'] == 1){ //CHECK WHETHER USER ACCOUNT IS ACTIVE OR NOT
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];            
            $_SESSION['email'] = $row['email'];                        
            $_SESSION['role'] = $row['role'];
            $_SESSION['id'] = $row['s_no'];
            $_SESSION['pass'] = $row['password'];

            if($row['role'] == 'subscriber') { //GOING TO DIFFERENT PAGE ON THE BASIS OF USER ROLE
                header("Location: index.php");
            }else if($row['role'] == 'admin') {
                header("Location: dashboard.php");
            }
        }else{ 
            $notActive = true;
        }
        
    }else{
        $loginSuccess = true;
    }
}
?>