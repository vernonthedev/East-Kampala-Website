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

$sql = "SELECT * FROM uploaded_files";
$result = $conn->query($sql);

$conn->close();


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
                        if($result->num_rows >0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>".$count."</td>";
                                echo "<td>".$row['filename']."</td>";
                                echo '<td><a href="admin/uploads/files/'.$row['filename'].'" class="btn btn-dark" download><img src="assets/img/download.gif" width="20px" class="rounded-circle"> Download</a></td>';
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
                <!-- <div class="d-flex">
                    <button class="btn btn-warning pr-3" style="border-radius: 0px;">Add</button>
                    <button class="btn btn-danger" style="padding-left: 4px; margin-left: 10px; border-radius: 0px;">Delete</button>
                </div> -->

            </div>
        </div>
    </div>

    <?php include'footer.php'; ?>
</body>
</html>
