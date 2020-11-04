<?php
$first_name = "";
$last_name = "";
$email = "";
$pass = "";
$c_pass = "";
$error = array(); //store all errors
if(isset($_POST['register'])){
    // FIRST NAME
    $first_name = strip_tags($_POST['first_name']); //REMOVE HTML TAGS
    $first_name = str_replace( ' ', '',$first_name); //REMOVE SPACES
    $first_name = ucfirst(strtolower($first_name)); //FIRST NAME CAPITALIZE
    $_SESSION['first_name'] = $first_name; //STORE FIRST NAME IN SESSION
    
    // LAST NAME
    $last_name = strip_tags($_POST['last_name']);
    $last_name = str_replace( ' ', '',$last_name);
    $last_name = ucfirst(strtolower($last_name));
    $_SESSION['last_name'] = $last_name;

    // EMAIL
    $email = strip_tags($_POST['r_email']);
    $email = str_replace( ' ', '',$email);
    $_SESSION['r_email'] = $email;

    // PASSWORD
    $pass = strip_tags($_POST['r_pass']);
    $c_pass = strip_tags($_POST['cr_pass']);

    // CHECK IF EMAIL AREADY EXIST
    $e_check = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    $num_rows = mysqli_num_rows($e_check);
    if($num_rows > 0) {
        array_push($error, "Email already in use");
    }

    // CHECK PASSWORD MATCH
    if($pass != $c_pass){
        array_push($error, 'Password does not match');
    }
    
    if(empty ($error)){ //will add new user if no error is in data he provided
        $pass = md5($pass);
        $query=mysqli_query($conn, "INSERT INTO users(first_name, last_name, email, password) VALUES( '$first_name', '$last_name', '$email', '$pass')");

        	//Clear session variables 
		$_SESSION['first_name'] = "";
		$_SESSION['last_name'] = "";
        $_SESSION['r_email'] = "";
        
        $successSignUp=true; //for ensuring that user registered successfully
        // header("Location: index.php?page=login");
        
    }
}

?>