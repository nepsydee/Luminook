<?php
include '../data/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    // Check for success or failure
    if ($result) {
        header("location:../return/indexuser.php");
        exit();
    } else {
        echo 'Error deleting record: ' . mysqli_error($conn);
        exit();
    }
}
?>
