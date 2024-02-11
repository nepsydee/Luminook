<?php
include '../data/db.php';

if (isset($_POST["save"])) {
    
    $image = $_FILES["image"]["name"];
    $imageDatapath= "images/".$image;
    $imageTmp= $_FILES['image']['tmp_name'];
    $savepath= "../images/".$image;
    move_uploaded_file($imageTmp,$savepath);
    $name = $_POST["name"];
    $num = $_POST["num"];
    $author = $_POST["author"];
    $book = $_POST["book"];
    $date = $_POST["date"];
   

    $insertquery = "INSERT INTO books (image, name, number, author, books, date) VALUES ('$imageDatapath', '$name', '$num', '$author', '$book', '$date')";
    $result = mysqli_query($conn, $insertquery);

    if ($result) {

        header("location:../author/book.php"); //after successfully enter then go this location
        
        exit(); 
}

}
else {
    echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
}
?>
