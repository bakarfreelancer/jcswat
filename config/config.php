<?php
$conn = mysqli_connect("localhost","root","","jcswat"); //connection with db

if(mysqli_connect_errno()){
    echo "Failed to connect ". mysqli_connect_errno();
}
date_default_timezone_set("Asia/Karachi");
?>