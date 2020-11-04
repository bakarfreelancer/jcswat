<?php
function redirect($location){
    echo '<script>location.replace("'.$location.'")</script>';
}
?>