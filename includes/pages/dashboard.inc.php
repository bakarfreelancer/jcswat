<?php
if($_SESSION['role'] != 'admin'){//will redirect to home page if user is not admin
    redirect('index.php');
  }
// TOTAL SUBSCRIBERS
$subscribers_query = mysqli_query($conn, 'SELECT * FROM users WHERE role = "subscriber"');
$no_of_subscribers = mysqli_num_rows($subscribers_query);

// TOTAL ADMINS
$admins_query = mysqli_query($conn, 'SELECT * FROM users WHERE role = "admin"');
$no_of_admins = mysqli_num_rows($admins_query);

// TOTAL ACTIVE
$active_query = mysqli_query($conn, 'SELECT * FROM users WHERE is_active = "1"');
$no_of_active = mysqli_num_rows($active_query);

// TOTAL DISABLED
$disabled_query = mysqli_query($conn, 'SELECT * FROM users WHERE is_active = "0"');
$no_of_disabled = mysqli_num_rows($disabled_query);

// TOTAL NEWS
$news_query = mysqli_query($conn, 'SELECT * FROM event_news');
$no_of_news = mysqli_num_rows($news_query);

?>
<div class="container-fluid">
    <div class="my-4">
        <h2 class="text-center">Dashboard</h2>
    </div>
    <h4 class="my-4">Members summary</h4>
    <div class="row">
    <div class="col-md-3 mx-auto">
    <a href="dashboard.php?page=members">
            <div class="jumbotron text-white bg-pr py-5 text-center">
                <h4 class="text-white">Admins</h4>
                <p class="display-4">
                <?php echo $no_of_admins; ?>
                </p>
            </div>
            </a>
        </div>
        <div class="col-md-3 mx-auto">
        <a href="dashboard.php?page=members">
            <div class="jumbotron text-white bg-primary py-5 text-center">
                <h4 class="text-white">Subscribers</h4>
                <p class="display-4">
                    <?php echo $no_of_subscribers; ?>
                </p>
            </div>
            </a>
        </div>
    <div class="col-md-3 mx-auto">
    <a href="dashboard.php?page=members">
            <div class="jumbotron text-white bg-pr py-5 text-center">
                <h4 class="text-white">Active</h4>
                <p class="display-4">
                <?php echo $no_of_active; ?>
                </p>
            </div>
            </a>
        </div>
        <div class="col-md-3 mx-auto">
        <a href="dashboard.php?page=members">
            <div class="jumbotron text-white bg-danger py-5 text-center">
                <h4 class="text-white">Disabled</h4>
                <p class="display-4">
                <?php echo $no_of_disabled; ?>
                </p>
            </div>
            </a>
        </div>
    </div>
    <div class="spacer"></div>
    <!-- NEWS SUMMARY -->
    <h4 class="my-4">News summary</h4>
    <div class="row">
    <div class="col-md-3 mx-auto">
    <a href="dashboard.php?page=news">
            <div class="jumbotron text-white bg-pr py-5 text-center">
                <h4 class="text-white">TOTAL NEWS</h4>
                <p class="display-4">
                <?php echo $no_of_news; ?>
                </p>
            </div>
        </div>
        </a>
    </div>
</div>