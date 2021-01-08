<?php
$admissions_result_arr = [];
if(isset($_POST['register_search'])){
    $register_search = $_POST['register_search'];
    $register_search_cat = $_POST['register_search_cat'];
    $sql = "SELECT * FROM $register_search_cat WHERE contact_no = '$register_search'";
    $register_search_query = mysqli_query($conn, $sql);
    $no_of_admissions = mysqli_num_rows($register_search_query);
//     if($no_of_admissions > 0){
//         $admissions_result_arr = mysqli_fetch_array($register_search_query);
//     }
}
?>