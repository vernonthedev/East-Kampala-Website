<?php
include'config.php';

$detele_event = "DELETE FROM event_list WHERE event_id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $detele_event)) {
    echo '<script>swal("Compelete", "Event Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "event-list.php";</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>