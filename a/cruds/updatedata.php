


<?php
include '../data/db.php';
// include 'update.php';


 
$id= $_POST['studentid'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "update `librarian` set name='$name', email='$email', password='$password' where id='$id'";
    
    if($result = mysqli_query($conn, $sql)){
        header("location:../library/user.php");
        
          exit();

    }
    else{
    echo "error";
    }
    

?> 






