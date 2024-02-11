<?php 
require '../data/setting.php';
if(!isset($_SESSION['is_login']) || $_SESSION['is_login']==false){
header('Location: ../adminlog/adminlogin.php');
exit();




}

require_once('../data/db.php');



//now code of the to show the record 
$query = "SELECT * FROM books";
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
<div class="details">
    <div class="signup">
        <div class="cardheader">
            <h2>Details</h2>
        </div>
        <br>
        <br>
<table>
<thead class='tab'>
<tr>
<td>Id</td>
<td>Role</td>
<td>Name</td>
<td>Email</td>
<td>Book Borrowed</td>
<td>Book Returned</td>

</tr>
</thead>
<thbody>
<tr>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <td><?php echo $row['id']; ?> </td>
    <td><?php echo $row['role']; ?> </td>
    <td><?php echo $row['name']; ?> </td>
    <td><?php echo $row['email']; ?> </td>
    <td><?php echo $row['borrow_book']; ?> </td>
    <td><?php echo $row['return_book']; ?> </td>
    <td id="ed"><a href="#"><span>Edit</span></a> | <a href="#">Delete</a></td>


</tr>
<?php
}
?>

</table>
</div>

</table>
</div>
</body>
</html>