<?php
include'config.php';
$sql = "SELECT * FROM image_gallery";
$viewing_img = $conn->prepare($sql);
$viewing_img->execute();
$rows = $viewing_img->fetchAll();


?>

<!doctype html>
<html lang="en">
<head>
    <title>Image Gallery | EKC SDA Church</title>
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
                        <h2>Photos Gallery</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Photos Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-area pt-50 pb-50">
        <div class="section-title">
            <h2>Photos Gallery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="container">
            <div class="row">
<?php
    foreach($rows as $row){
?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-gallery-box">
                        <img src="admin/images-gallery/<?php echo $row->gallery_img; ?>" alt="<?php echo $row->gallery_title; ?>">
                        <a href="admin/images-gallery/<?php echo $row->gallery_img; ?>" class="gallery-btn" data-imagelightbox="popup-btn"> <i class="flaticon-search"></i></a>
                        <div class="gallery_imgTitle">
                            <h4><?php echo $row->gallery_title; ?></h4>
                        </div>
                    </div>
                </div>
<?php
}
?>
            </div>
        </div>
    </div>

<?php include'footer.php'; ?>
</body>

</html>
