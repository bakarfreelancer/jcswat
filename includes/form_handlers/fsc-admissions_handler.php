<?php
$fsc_success = 0;

if(isset($_POST["fsc_id"])){
    $id = $_POST["fsc_id"];
    $f_name = $_POST["fsc_f_name"];
    $gender = $_POST["fsc_gender"];
    $contact_no = $_POST["fsc_contact_no"];
    $address = $_POST["fsc_address"];
    $matric_group = $_POST["fsc_matric_group"];
    $matric_marks_obtain = $_POST["fsc_matric_marks_obtain"];
    $matric_total_marks = $_POST["fsc_matric_total_marks"];
    $matric_board = $_POST["fsc_matric_board"];
    $deptt = $_POST["fsc_deptt"];

    $sql ="INSERT INTO  fsc_admissions(f_name, gender, contact_no, address, matric_group, matric_marks_obtain, matric_total_marks, matric_board, deptt, user_id) VALUES( '$f_name', '$gender', '$contact_no', '$address', '$matric_group', '$matric_marks_obtain', '$matric_total_marks', '$matric_board', '$deptt', '$id')";
    $fsc_query = mysqli_query($conn, $sql);
    if($fsc_query) $fsc_success = 1;
    else $fsc_success = 2;
}
?>