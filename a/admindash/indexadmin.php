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


// Count new users added in the last 1 day
$oneDayAgo = date('Y-m-d H:i:s', strtotime('-1 day'));
$sql_new_users = "SELECT COUNT(name) as new_users FROM users WHERE email > '$oneDayAgo'";
$result_new_users = mysqli_query($conn, $sql_new_users);

// Fetch user details
$query_user_details = "SELECT * FROM users";
$result_user_details = mysqli_query($conn, $query_user_details);





//

// Count total borrowed books
$sql_quantity = "SELECT SUM(quantity) as total_quantity FROM users";
$result_quantity = mysqli_query($conn, $sql_quantity);

// Fetch the total borrowed books
$total_quantity = 0;
if (mysqli_num_rows($result_quantity) > 0) {
    $row_quantity = mysqli_fetch_assoc($result_quantity);
    $total_quantity = $row_quantity['total_quantity'];
}



?>


<!-- ------------------------------------------------------------------------------------- -->


 
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<link rel="stylesheet" href="indexadmin.css">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<title>Dashboard</title>
</head>
<body>
   <div class="container">
    <div class="navigation">
        <ul>
            <li class="<?php echo ($current_page === 'indexadmin.php') ? 'active' : ''; ?>">
                <a href="#">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <span class="title"><span style= " color: black;">Welcome</span>
                       Admin</span>
                </a>
            </li>
        
       
            <li>
                <a class="active" href='../admindash/indexadmin.php'>
                    <span class="icon"><ion-icon name="home"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
                </span>
            </li>
       
     
           <li> 
                <a href='../author/book.php'>
                    <span class="icon"><ion-icon name="library"></ion-icon></span>
                    <span class="title">Books</span>
                </a>
            </li>
       
      
           <li> 
                <a href='../users/user.php'>
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <span class="title">Users</span>
                </a>
            </li>
            <li> 
                <a href='../library/user.php'>
                    <span class="icon"><ion-icon name="laptop"></ion-icon></span>
                    <span class="title">Librarian</span>
                </a>
            </li>
            <li>
            <a onclick="return window.confirm('Are you sure you want to logout?')" href="../adminlog/logoutadmin.php" ?>
                    <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                    <span class="title">Log out</span>
                </a>
            </li>
        </ul>
    </div>

   
   <!-- ------------------------mainsection-------------------------- -->
   <div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu"></ion-icon>
        </div>
        <div class="user">
        <img src="../images/logoadmin.png" onclick="audio.play();">
    </div>
    </div>

    <!-- -----------------------cards------------------ -->
   <div class="cardbox">
    <div class="card">
        <div>
            <div class="number"> <?php
            $sql = "SELECT COUNT(name) as total_names FROM userlog";
            $datas = mysqli_query($conn, $sql);

            if (mysqli_num_rows($datas) > 0) {
                while ($row = mysqli_fetch_assoc($datas)) {
                    echo $row['total_names'];
                }
            }
            ?></div>
            <div class="cardname">Total Users</div>
            
        </div>
        <div class="iconbox">
            <ion-icon name="people-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="number"><?php echo $total_quantity; ?></div>
            <div class="cardname">Book Borrowed</div>
        </div>
        <div class="iconbox">
            <ion-icon name="calendar-outline"></ion-icon>

        </div>
    </div>
    <div class="card">
        <div>
            <div class="number">12</div>
            <div class="cardname">Total Books</div>
        </div>
        <div class="iconbox">
            <ion-icon name="book-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="number"> <?php
            $sql = "SELECT COUNT(name) as total_names FROM users";
            $datas = mysqli_query($conn, $sql);

            if (mysqli_num_rows($datas) > 0) {
                while ($row = mysqli_fetch_assoc($datas)) {
                    echo $row['total_names'];
                }
            }
            ?>
            </div>
            <div class="cardname">Borrowed Users</div>
        </div>
        <div class="iconbox">
            <ion-icon name="person-add-outline"></ion-icon>
        </div>
    </div>
   </div>
<!-- ----------------------------- details---------------------------------- -->
<div class="details">
    <div class="signup">
        <div class="cardheader">
            <h2>Details</h2>
            <a href='../alldetail/data.php' class="btn">View All</a>
        </div>
        <br>
        <br>
<table>
<thead class='tab'>
<tr>
    <td>Name</td>
<td>Email</td>
<td>Borrowed Book</td>
<td>Borrowed Quantity</td>
<td>Borrowed Date</td>
<td>Status</td>
<td>Action</td>
</tr>
</thead>
<thbody>
<tr>
    
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
      <td><?php echo $row['name']; ?> </td>
    <td><?php echo $row['email']; ?> </td>
    <td><?php echo $row['borrow_book']; ?> </td>
    <td><?php echo $row['quantity']; ?> </td>
    <td><?php echo $row['borrowed_date']; ?> </td>
    <td><span class="status borrowed">Borrowed</span></td>
    <td><a href="../crudd/update.php?id=<?php echo $row['id']; ?>"><span id="green"><ion-icon name="create-outline"></ion-icon></span></a> | <a onclick="return window.confirm('Are you sure you want to delete this user?')" href="../crudd/delete.php?id=<?php echo $row['id']; ?>"><span id="red"><ion-icon name="trash-bin-outline"></ion-icon></span></a></td>
</tr>
<?php
}
?>

</table>
</div>
<!-- ---------------------------------------new users----------------------------- -->



</div>
</div>
</div>
   <!-- ionicons........................ -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="indexadmin.js"></script>
<script defer src="admin.js"></script>
</body>

</html>






    
  










