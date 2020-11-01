<?php
if($_SESSION['role'] != 'admin'){
    echo '<script>location.replace("index.php")</script>';
  }
?>