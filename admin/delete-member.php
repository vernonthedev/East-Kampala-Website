<?php
include'config.php';

$detele_member = "DELETE FROM member_list WHERE member_id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $detele_member)) {
    echo '<script>swal("Compelete", "Member Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "member-list.php";</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>