


<?php
include '../data/db.php';
// include 'update.php';


 
$id= $_POST['studentid'];
    $role = $_POST["role"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $book = $_POST["book"];
    $quan = $_POST["quan"];
    $date = $_POST["date"];

    $sql = "update `users` set role='$role', name='$name', email='$email', borrow_book='$book', quantity='$quan', borrowed_date='$date' where id='$id'";
    
    if($result = mysqli_query($conn, $sql)){
        header("location:../admindash/indexadmin.php");
        
          exit();

    }
    else{
    echo "error";
    }
    

?> 






