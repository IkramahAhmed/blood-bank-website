<?php
include 'conn.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $que_id = intval($_GET['id']); // Convert ID to integer

    $sql = "DELETE FROM contact_query WHERE query_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $que_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Query deleted successfully!'); window.location.href='query.php';</script>";
    } else {
        echo "<script>alert('Error deleting query!'); window.location.href='query.php';</script>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('Invalid request!'); window.location.href='query.php';</script>";
}

mysqli_close($conn);
?>
