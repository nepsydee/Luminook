<?php
include '../data/db.php';

if (isset($_POST["save"])) {
    $role = $_POST["role"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $book = $_POST["book"];
    $returnedBook = $_POST["returnedBook"];

    $insertquery = "INSERT INTO users (role, name, email, borrow_book, return_book) VALUES ('$role', '$name', '$email', '$book', '$returnedBook')";
    $result = mysqli_query($conn, $insertquery);

    if ($result<=1) {
        echo "<script> 
                alert('Data Inserted Successfully');
                window.location.href='../admindash/indexadmin.php';  //after successfully enter then go this location
              </script>";
        exit(); 
}
else {
        echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
    }
}
?>