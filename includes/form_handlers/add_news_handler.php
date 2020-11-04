<?php
$_SESSION['addedNewsI'] = 0; //will be 1 if new add successfuly and will be 2 if not success
if(isset($_POST['add_news'])){
    $news_title = $_POST['news_title'];
    $news_des = $_POST['news_des'];
    $current_timedate = date("Y-m-d H:i:s");
    if(strlen($news_des) < 256 && strlen($news_title) < 256){
       $insert_query = mysqli_query($conn, "INSERT INTO event_news(news_message, publish_date, title) VALUES( '$news_des', '$current_timedate', '$news_title')");
       //News added successfuly
           $_SESSION['addedNewsI'] = 1;
           redirect('dashboard.php?page=news&msg=1');
    }else{ //Length of news description is more than 256 characters
        $_SESSION['addedNewsI'] = 2;
        redirect('dashboard.php?page=news&msg=2');
        // header('Location: dashboard.php?page=news');
    }
    
}
?>