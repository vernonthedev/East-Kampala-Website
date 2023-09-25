<?php
include'config.php';
$view_data = "select * from video_gallery";
$run_query = mysqli_query($conn, $view_data);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Video Sermons | EKC SDA Church</title>
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
                        <h2>Video Sermons</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Video Sermons</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-area pt-50 pb-50">
        <div class="section-title">
            <h2>Video Sermons</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="container pt-3" style="background: rgb(254 0 2 / 10%); border-radius: 20px;">
            <div class="row">
<?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) {
?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="video-gallery-box">
                        <video width="100%" controls class="rounded">

                            <source src="admin/videos-gallery/<?php echo $row['video_location']; ?>" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                        <div class="gallery_imgTitle bg-gradient-primary" >
                            <h4><?php echo $row['video_title']; ?></h4>
                        </div>

                    </div>
                </div>
<?php
}
}
?>
            </div>
        </div>
    </div>

<?php include'footer.php'; ?>
</body>

</html>
