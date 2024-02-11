<?php
include '../data/db.php';

// Check if the form is submitted

    $id = $_POST['bookid'];
    $name = $_POST["name"];
    $number = $_POST["number"];
    $author = $_POST["author"];
    $book = $_POST["book"];
    $date = $_POST["date"];

    $sql = "UPDATE `books` SET 
            `name` = '$name',
            `number` = '$number',
            `author` = '$author',
            `books` = '$book',
            `date` = '$date'
            WHERE `id` = '$id'";

    if ($result = mysqli_query($conn, $sql)) {
        header("location: ../modify/book.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
 
?>
