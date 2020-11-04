<?php
if($_SESSION['role'] != 'admin'){ //will redirect to home page if the current user in not admin
  echo '<script>location.replace("index.php")</script>';
}
?>
<div class="container_fluid">
    <div>
      <span class="text-center my-3 d-block">
      <a href="dashboard.php?page=news" class="btn btn-pr float-left"><i class="fas fa-arrow-left"></i></a>
        <h3 class="text-center d-inline-block">add news</h3>
      </span>
    </div>
    <div>
    <form class="needs-validation contactForm col-md-7 mx-auto" action="dashboard.php?page=add_news" method="POST" novalidate>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="news_title">News title</label>
                <input type="text" class="form-control" id="news_title" value="" placeholder="Title" name="news_title"
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-12 mb-3">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="news_des">Event News</label>
                <textarea type="text" class="form-control" rows="5" id="news_des" name="news_des" placeholder="News description..." required></textarea>
                <div class="invalid-feedback">
                  Please write some description.
                </div>
              </div>
            </div>
            <button class="btn btn-block btn-pr" type="submit" name="add_news" >Add <i class="fas fa-plus"></i></button>
          </form>
    </div>
</div>