<?php
include'config.php';
$view_news = "select * from news WHERE news_id = '".$_GET['id']."'";
$run_query = mysqli_query($conn, $view_news);
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) {
// $n_img = $row['news_img'];
?>
<!doctype html>
<html lang="en">
<head>
    <title>Devotions | EKC SDA Church</title>
<?php include'style.php'; ?>
</head>

<body>
<?php include'head.php'; ?>
<?php include'preloader.php'; ?>
    <div class="page-title-area" style="background: #0a53be;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2><?php echo $row['news_title']; ?></h2>
                        <ul>
                            <li><a href="./">Home</a>
                            </li>
                            <li>Devotion</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-sec pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-9 col-xs-12">
                    <div class="clearfix"></div>
                    <div class="news_div news_details_div">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="news_img">
                                    <img src="admin/news-images/<?php echo $row['news_img']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="news_content">
                                    <h3><?php echo $row['news_title']; ?></h3>
                                    <span><?php echo $row['news_place']; ?>, <?php echo $row['news_date']; ?></span>
                                    <p><?php echo $row['news_content']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-sm-3 col-xs-12" style="border-radius: 10px;">
                    <?php include'news-sidebar.php'; ?>
                </div>
            </div>

        </div>
    </section>







<?php include'footer.php'; ?>


</body>

</html>
<?php
}
}else{
    //show 404 page incase the user enters a value of page not available in the system
    http_response_code(404);
}
?>
