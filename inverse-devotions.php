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

<head>
    <title>Inverse Lessons | East Kampala SDA Church</title>
    <?php include'style.php';
    include'head.php';?>
    <?php include'preloader.php'; ?>
</head>


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
                                echo '<td><a href="admin/uploads/files/'.$row['filename'].'" class="btn btn-dark" download><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                              </svg> Download</a></td>';
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
