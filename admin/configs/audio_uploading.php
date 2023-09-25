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

//CHECK IF FILE WAS UPLOADED
if (isset($_POST['submit'])) {
//configure the file locations
$targetDir = "uploads/audios/";
$targetFile = $targetDir . basename($_FILES["audio_sermon"]["name"]);
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// check if the file is a pdf and less than 2MB
if($fileType != "mp3" || $_FILES["audio_sermon"]["size"] > 20000000){
    echo '<script> alert("Only mp3 Files less than 20MB are allowed to be uploaded.")</script>';
}else{
    //move the uploaded file to the uploads folder
    if(move_uploaded_file($_FILES["audio_sermon"]["tmp_name"], $targetFile)){
        //insert the file into the database then
        $filename = $_FILES["audio_sermon"]["name"];
        $folder_path = $targetDir;
        $time_stamp = date('Y-m-d H:i:s');
        $sql = "INSERT INTO audio_uploads(audio_name, file_path, time_stamp) VALUES ('$filename', '$folder_path', '$time_stamp')";

        if($conn->query($sql)===TRUE){
            echo '<script>alert("File Uploaded Successfully")</script>';
        }else{
            echo '<script>alert("Error occurred.. ")</script>';
        }
    }else{
        echo '<script>alert("Error Uploading file")</script>';
    }
}

}

//closing the db connection
$conn->close();

?>
