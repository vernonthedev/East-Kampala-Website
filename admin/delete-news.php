<?php
include'config.php';

$detele_news = "DELETE FROM news WHERE news_id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $detele_news)) {
    echo '<script>swal("Compelete", "Devotion Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "news-list.php";</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>