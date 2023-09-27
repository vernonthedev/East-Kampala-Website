<?php
include'config.php';
$sql = "SELECT * FROM event_list ORDER BY ? DESC";
$run_query = $conn->prepare($sql);
$run_query->execute(["event_id"]);
$rows = $run_query->fetchAll();


?>
<!doctype html>
<html lang="en">
<head>
    <title>Church Programs | EKC SDA Church</title>
    <link rel="stylesheet" href="assets/css/events.css">
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
                        <h2>Church Events</h2>
                        <ul>
                            <li><a href="./">Home</a>
                            </li>
                            <li>List of Church Organised Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



<section class="light ">
	<div class="container py-2 mt-3 pt-3">
        <?php
            //loop through the retrieved programs
            foreach($rows as $row){
        ?>

		<article class="postcard light green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="admin/events/<?php echo $row->event_img; ?>" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title green"><a href="#"><?php echo $row->event_title; ?></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i><?php echo $row->event_date?>
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><?php echo $row->event_content; ?></div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i><?php echo $row->event_place?></li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>Whole Day.</li>
					<li class="tag__item play green">
						<a href="#"><i class="fas fa-play mr-2"></i>I Will Go</a>
					</li>
				</ul>
			</div>
		</article>
        <?php
        }
        ?>

	</div>
</section>




<?php include'footer.php'; ?>


</body>

</html>
