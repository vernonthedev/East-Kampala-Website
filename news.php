<?php
include'config.php';
$view_news = "select * from news";
$run_query = mysqli_query($conn, $view_news);
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
                        <h2>Daily Devotions</h2>
                        <ul>
                            <li><a href="./">Home</a>
                            </li>
                            <li>East Kampala Devotional Study</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<section >
<div class="container mt-sm-5 mb-sm-5">
  <div class="row" >
  <?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) {
$n_img = $row['news_img'];
?>
        <div class="col-lg-4 mt-sm-3">
        <div class="boo info-horizontal bg-gradient-light border-radius-xl d-block d-md-flex p-4 mb-3" >
            <img src="admin/news-images/<?php echo $row['news_img']; ?>" class="rounded img img-fluid" alt="image" width="80px" height="100%">
            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-dark"><?php echo $row['news_title']; ?></h5>
            <p class="text-dark"><?php echo $row['news_place']; ?>, <?php echo $row['news_date']; ?></p>
            <a href="news-details.php?id=<?php echo $row['news_id']; ?>" class="text-white icon-move-right">
                <span class="badge bg-gradient-secondary">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></span>
                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
            </div>
        </div>
        </div>

        <?php
}
}
?>


  </div>
</div>

</section>

<?php include'footer.php'; ?>


</body>

</html>
