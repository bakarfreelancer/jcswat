<?php
$register_search_query = 0;
$register_search_cat;
if(isset($_POST['register_search'])){
    $register_search = $_POST['register_search'];
    $register_search_cat = $_POST['register_search_cat'];
    $sql = "SELECT * FROM $register_search_cat WHERE contact_no = '$register_search'";
    $register_search_query = mysqli_query($conn, $sql);
    $no_of_admissions = mysqli_num_rows($register_search_query);
}
?>