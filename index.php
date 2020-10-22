<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP LINKS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CUSTOM CSS LINK -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JQUERY NUMBER COUNTER -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- JQUERY WAYPOINTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <!-- CUSTOM JS MAIN.JS -->
    <script src="assets/js/main.js"></script>

    <title>JC Swat</title>
</head>
<body>
<?php
include './includes/components/header.php';
$pages_folder = 'includes/pages';
if(isset($_GET['page'])){
    
    $page_name = $_GET['page'];
    $scaned_pages=scandir($pages_folder);
    unset($scaned_pages[0],$scaned_pages[1]);
    if(in_array($page_name.'.inc.php',$scaned_pages)){
        include 'includes/pages/'.$page_name.'.inc.php';

    }else{
        include 'includes/pages/notfound.inc.php';  
    }
}else{
    include 'includes/pages/home.inc.php';
}



include './includes/components/footer.php'; //Iclude footer file
?>
<!-- CUSTOM FILES -->
<script rel="text/javascript" src="assets/js/jquery/counter.js"></script>
<!-- HOVER DROPDOWN -->
<script rel="text/javascript" src="assets/js/jquery/dropdown.js"></script>

<!-- BOOTSTRAP JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>