<?php
include '../data/db.php';

if (isset($_POST["save"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];

    $insertquery = "INSERT INTO userlog (name, email, contact) VALUES ('$name', '$email', '$contact')";
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