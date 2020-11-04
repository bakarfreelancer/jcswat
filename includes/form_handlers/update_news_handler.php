<?php
$_SESSION['updateNews'] = 0; //will be 1 if news updated successfully
if(isset($_POST['update_news'])){
    $news_title = $_POST['updated_news_title'];
    $news_des = $_POST['updated_news_des'];
    $news_id = $_GET['id'];
    if(strlen($news_title) < 256 && strlen($news_des) < 256){  
        $_SESSION['len'] = strlen($news_des);
    $news_update_query= mysqli_query($conn, "UPDATE event_news SET title ='$news_title', news_message ='$news_des' WHERE s_no = '$news_id'");
        if($news_update_query){
            $_SESSION['updateNews'] = 1; //Indicates that news updated
        }else{
            $_SESSION['updateNews'] =2;
        }
    }else{
        $_SESSION['updateNews'] =2;
    }
}
?>