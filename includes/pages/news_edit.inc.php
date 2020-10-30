<?php
if(!isset($_GET['id'])){
  echo '<script>location.replace("dashboard.php")</script>';
}
if(isset($_GET['id'])){
    $newsId = $_GET['id'];
    $news_query = mysqli_query($conn, "SELECT * FROM event_news WHERE s_no = '$newsId'");
    if(mysqli_num_rows($news_query) == 1){
    $news_data = mysqli_fetch_array($news_query);
    }else{
      echo '<script>location.replace("dashboard.php")</script>';
    }
    }
?>
<div class="container-fluid">
    <div>
      <span class="text-center my-3 d-block">
      <a href="dashboard.php?page=news" class="btn btn-pr float-left"><i class="fas fa-arrow-left"></i></a>
        <h3 class="text-center d-inline-block">edit news</h3>
      </span>
    </div>
    <div>
    <div>
    <form class="needs-validation contactForm col-md-7 mx-auto" action="dashboard.php?page=news&id=<?php echo $newsId; ?>" method="POST" novalidate>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="news_title">News title</label>
                <input type="text" class="form-control" id="news_title" 
                value="<?php echo $news_data['title']; ?>"
                 placeholder="Title" name="updated_news_title"
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-12 mb-3">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="news_des">Event News</label>
                <textarea type="text" class="form-control" rows="5" id="news_des" name="updated_news_des" placeholder="News description..."
                required><?php echo $news_data['news_message']; ?></textarea>
                <div class="invalid-feedback">
                  Please write some description.
                </div>
              </div>
            </div>
            <button class="btn btn-block btn-pr" type="submit" name="update_news" >Add <i class="fas fa-plus"></i></button>
          </form>
    </div>
</div>