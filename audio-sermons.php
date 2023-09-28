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

/* Customize the container for the audio player */
.audio-player {
            width: 300px;

            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }

        /* Style the audio controls */
        audio {
            width: 100%;
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
        <div class="col-lg-3 mt-sm-3 mb-3 pb-3 col-sm-12 col-md-12">
        <div class="audio-player bg-gradient-light text-center">
        <img src="assets/icons/audio.svg"  width="70px" style="margin: auto;"/>
        <blockquote><?php echo $row->audio_name?></blockquote>
        <audio controls>
            <source src="admin/uploads/audios/<?php echo $row->audio_name?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <!-- Add other controls as needed (volume, progress bar, etc.) -->
     </div>

        </div>






        <?php
}

?>


  </div>
</div>



    <?php include'footer.php'; ?>


