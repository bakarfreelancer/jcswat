<?php
$_SESSION['updateNews'] = 0;
if(isset($_POST['update_news'])){
    $news_title = $_POST['updated_news_title'];
    $news_des = $_POST['updated_news_des'];
    $news_id = $_GET['id'];   
    $news_update_query= mysqli_query($conn, "UPDATE event_news SET title ='$news_title', news_message ='$news_des' WHERE s_no = '$news_id'");
    if($news_update_query){
        $_SESSION['updateNews'] = 1;
    }
}
?>