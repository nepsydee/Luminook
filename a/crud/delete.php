<?php
include '../data/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `userlog` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    // Check for success or failure
    if ($result) {
        header("location:../users/user.php");
        exit();
    } else {
        echo 'Error deleting record: ' . mysqli_error($conn);
        exit();
    }
}
?>
