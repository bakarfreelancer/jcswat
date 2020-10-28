<?php
$succes_news_insert = 0;
if(isset($_POST['add_news'])){
    $news_title = $_POST['news_title'];
    $news_des = $_POST['news_des'];
    $current_timedate = date("Y-m-d H:i:s");
    if(strlen($news_des) < 256 && strlen($news_title) < 256){
       $insert_query = mysqli_query($conn, "INSERT INTO event_news(news_message, publish_date, title) VALUES( '$news_des', '$current_timedate', '$news_title')");
       if($insert_query){
           $succes_news_insert = 1;
           $_SESSION['succes_news_insert'] = 1;
           header('Location: dashboard.php?page=news');
       }
    }else{
        $succes_news_insert = 2;
        $_SESSION['succes_news_insert'] = 2;
        header('Location: dashboard.php?page=news');
    }
    
}
?>