<?php

include 'config.php';

$sql = "SELECT * FROM uploaded_files";
$result = $conn->prepare($sql);
$result->execute();
$rows = $result->fetchAll();



?>

<!doctype html>
<html lang="en">

<head>
    <title>Inverse Lessons | East Kampala SDA Church</title>
    <?php include'style.php';
    include'head.php';?>
    <?php include'preloader.php'; ?>
</head>

<body>
    <div class="page-title-area" style="background: #0a53be;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Inverse Bible Study Lessons</h2>
                        <ul>
                            <li><a href="./">Home</a>
                            </li>
                            <li>Youth Lessons</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
        <div class="row">
            <div class="col-12 p-4 main-content mt-5">
                <!-- main content -->
                <h5>Download Inverse Bible Study Lessons</h5>
                <table class="table table-inverse table-responsive table-bordered table-hover table-striped">
                    <thead class="thead-inverse">
                        <tr class="bg-secondary ">
                            <th class="h6">Index</th>
                            <th class="h6">Lesson Name</th>
                            <th class="h6">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $count =1;
                        foreach($rows as $row){

                                echo "<tr>";
                                echo "<td>".$count."</td>";
                                echo "<td>".$row->filename."</td>";
                                echo '<td><a href="admin/uploads/files/'.$row->filename.'" class="btn btn-dark" download><img src="assets/img/download.gif" width="20px" class="rounded-circle"> Download</a></td>';
                            echo "</tr>";
                                $count++;
                        }

                        ?>
                        </tbody>
                </table>

            </div>
        </div>
    </div>

    <?php include'footer.php'; ?>
</body>
</html>
