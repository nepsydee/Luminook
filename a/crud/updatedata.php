


<?php
include '../data/db.php';
// include 'update.php';


 
$id= $_POST['studentid'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];

    $sql = "update `userlog` set name='$name', email='$email', contact='$contact', password='$password' where id='$id'";
    
    if($result = mysqli_query($conn, $sql)){
        header("location:../users/user.php");
        
          exit();

    }
    else{
    echo "error";
    }
    

?> 






