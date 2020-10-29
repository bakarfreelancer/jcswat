<?php
$member_id = $_GET['id'];
if(mysqli_query($conn, "DELETE FROM users WHERE s_no = '$member_id'")){
    echo '<script>location.replace("dashboard.php?page=members&delete=yes")</script>';
}else echo 'failed';
?>