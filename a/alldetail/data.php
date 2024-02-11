<?php 
require '../data/setting.php';
if(!isset($_SESSION['is_login']) || $_SESSION['is_login']==false){
header('Location: ../adminlog/adminlogin.php');
exit();




}

require_once('../data/db.php');



//now code of the to show the record 
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="data.css">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>Data</title>
</head>
<body>
<div id="mymodel">
    <div class="signup">
<div class="details">
    <div class="signup">
        <div class="cardheader">
            <h2>All Details</h2> 
            <a href='../admindash/indexadmin.php' class="btn">Go Back</a>   
        </div>
        <br>
        <br>
        <table>
<thead class='tab'>
<tr>
<td>Id</td>
<td>Added By</td>
<td>Name</td>
<td>Email</td>
<td>Borrowed Book</td>
<td>Borrowed Quantity</td>
<td>Borrowed Date</td>
<td>Return Book</td>
<td>Return Quantity</td>
<td>Returned Date</td>

</tr>
</thead>
<thbody>
<tr>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['role']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['borrow_book']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['borrowed_date']; ?></td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
</tr>
<?php
}
?>

</table>

</div>
</div>
</div>
</body>
</html>