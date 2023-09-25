<?php
include'config.php';

$delete_gallery = "DELETE FROM video_gallery WHERE video_id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $delete_gallery)) {
    echo '<script>alert("Video Deleted Successfully");</script>';
    echo '<script> window.location.href = "image-gallery.php";</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
