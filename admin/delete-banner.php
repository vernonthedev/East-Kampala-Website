<?php
include'config.php';

$detele_banner = "DELETE FROM banner_slider WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $detele_banner)) {
    echo '<script>swal("Compelete", "Banner Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "banner-list.php";</script>';
} else {
    echo '<script>swal("Failure", "Banner Not Deleted", "success");</script>';
}
?>