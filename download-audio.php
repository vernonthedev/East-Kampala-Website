<?php

$filename = $_GET['file'];


header('Cache-Control: private');
header('Content-type: audio/mp3');
header('Content-Transfer-Encoding: binary');
header('Content-Disposition: attachment; filename='.$filename);
header('Content-Length: '.filesize($filename));

if(!file_exists($filename)){

    http_response_code(404);
    die();
}
readfile($filename);





?>
