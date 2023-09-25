<?php

//Setting the database credentials
$server_name = "localhost";
$username = 'root';
$password= "";
$dbname = "inventweb_ngo";

$conn = new mysqli($server_name, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$sql = "SELECT * FROM audio_uploads";
$result = $conn->query($sql);

$conn->close();




?>

<head>
    <title>Audio Sermons | East Kampala SDA Church</title>
    <?php include'style.php';
    include'head.php';
    ?>

</head>
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

<div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-xs-12 p-4 main-content mt-5">
                <!-- main content -->
                <h5>Download Audio Sermons</h5>
                <table class="table table-striped table-responsive table-bordered table-hover table-striped">
                    <thead class="thead-inverse">
                        <tr class="bg-secondary ">
                            <th class="h6">Index</th>
                            <th class="h6">Audio Title</th>
                            <th class="h6">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $count =1;
                        if($result->num_rows >0){
                            while($row = $result->fetch_assoc()){

                                $path = "admin/uploads/audios/";
                                echo "<tr>";
                                echo "<td>".$count."</td>";
                                echo "<td>".$row['audio_name']."</td>";
                                echo '<td>
                                <a href="download-audio.php?file='.$path.''.$row["audio_name"].'" class="btn btn-dark "><img src="assets/img/download.gif" width="20px" class="rounded-circle"> Download</a>
                                </td>';
                            echo "</tr>";
                                $count++;
                            }

                        }else{
                            echo "<tr>
                            <td colspan='3'> No Records Found.</td>
                            </tr>";
                        }

                        ?>
                        </tbody>
                </table>

            </div>
        </div>
    </div>

    <?php include'footer.php'; ?>
