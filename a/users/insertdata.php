<?php
include '../data/db.php';

if (isset($_POST["save"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];

    $insertquery = "INSERT INTO userlog (name, email, contact, password) VALUES ('$name', '$email', '$contact', '$password')";
    $result = mysqli_query($conn, $insertquery);

    if ($result<=1) {
        echo "<script> 
                alert('Data Inserted Successfully');
                 window.location.href='user.php';  //after successfully enter then go this location
              </script>";
        exit(); 
}
else {
        echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
    }
}
?>