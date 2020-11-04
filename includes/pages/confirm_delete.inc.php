<?php
$member_id = $_GET['id'];
if(mysqli_query($conn, "DELETE FROM users WHERE s_no = '$member_id'")){
    redirect('dashboard.php?page=members&delete=yes');
}else echo 'failed';
?>