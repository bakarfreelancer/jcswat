<?php
$bs_success = 0;

if(isset($_POST["name"])){
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $name = $_POST["name"];
    $f_name = $_POST["f_name"];
    $gender = $_POST["gender"];
    $contact_no = $_POST["contact_no"];
    $address = $_POST["address"];
    $matric_group = $_POST["matric_group"];
    $matric_marks_obtain = $_POST["matric_marks_obtain"];
    $matric_total_marks = $_POST["matric_total_marks"];
    $matric_board = $_POST["matric_board"];
    $fsc_group = $_POST["fsc_group"];
    $marks_obtain = $_POST["marks_obtain"];
    $total_marks = $_POST["total_marks"];
    $board = $_POST["board"];
    $deptt = $_POST["deptt"];

    $sql ="INSERT INTO  bs_admissions(name , f_name, gender, contact_no, address, matric_group, matric_marks_obtain, matric_total_marks, matric_board, fsc_group, marks_obtain, total_marks, board, deptt) VALUES( '$name', '$f_name', '$gender', '$contact_no', '$address', '$matric_group', '$matric_marks_obtain', '$matric_total_marks', '$matric_board', '$fsc_group', '$marks_obtain', '$total_marks', '$board', '$deptt')";
    $bs_query = mysqli_query($conn, $sql);
    if($bs_query) $bs_success = 1;
    else $bs_success = 2;
}
?>