<?php

include'config.php';

$sql = "SELECT * FROM audio_uploads";
$result = $conn->prepare($sql);
$result->execute();
$rows = $result->fetchAll();

?>

<head>
    <title>Audio Sermons | East Kampala SDA Church</title>
    <?php include'style.php';
    include'head.php';
    ?>

</head>


<style>

    audio{

        width: 100%;
        height: 30%;


    }
</style>


<?php include'preloader.php'; ?>

    <div class="page-title-area" style="background: #0a53be;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Audio Sermons</h2>
                        <ul>
                            <li><a href="./">Home</a>
                            </li>
                            <li>Listen to Life Transforming Sermons</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="container mt-sm-5 mb-sm-5">
  <div class="row" >
  <?php
foreach($rows as $row){
?>
        <div class="col-lg-6 mt-sm-3 mb-3 pb-3">
        <div class="boo info-horizontal bg-gradient-secondary border-radius-xl d-block d-md-flex p-4 mb-3" >
            <img src="assets/img/audio.png" class="rounded img img-fluid" alt="image" width="80px" height="100%">
            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-white"><?php echo $row->audio_name; ?></h5>
            <audio src="admin/uploads/audios/<?php echo $row->audio_name?>" controls></audio>
                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
            </div>
        </div>
        </div>

        <?php
}

?>


  </div>
</div>



    <?php include'footer.php'; ?>


