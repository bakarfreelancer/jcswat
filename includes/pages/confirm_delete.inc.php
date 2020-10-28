<?php
$_SESSION['successDelete']=0;
$member_id = $_GET['id'];
if(mysqli_query($conn, "DELETE FROM users WHERE s_no = '$member_id'")){
    echo '<script>location.replace("dashboard.php?page=members")</script>';
    $_SESSION['successDelete'] = 1;
}else echo 'failed';
?>