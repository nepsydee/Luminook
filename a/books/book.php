<?php


require_once('../data/db.php');
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<link rel="stylesheet" href="book.css">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<title>Dashboard</title>
</head>
<body>
<div class="logo">
<a href="../admindash/indexadmin.php"><img src="../images/logoadmin.png"></a>
</div>
<div class="main">

<!-- ------------------------------- -->
<!--cards -->

   
<!--cards -->


<!--cards -->
<?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
<div class="card">
<div class="image">
<div class="des">
<img src="../<?php echo $row['image'];?>"alt="">
<h3><?php echo $row['name']; ?></h3>
<p><?php echo $row['author']; ?></p>
<button><a href="#">View</a></button>
</div>
</div>

</div>
<?php
 }
 ?>
 </div>
<!--show more -->
<div class="cards">
<div class="des">
<a href="../author/book.php"><button class="btn">Back</button></a>
</div>
</div>
</body>
<script src="book.js"></script>
</html>