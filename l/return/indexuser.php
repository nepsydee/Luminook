<?php
require '../data/setting.php';
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] == false) {
    header('Location: ../adminlog/adminlogin.php');
    exit();
}

require_once('../data/db.php');
//now code of the to show the record 
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

?>


<!-- ------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<link rel="stylesheet" href="indexuser.css">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<title>Dashboard</title>
</head>
<body>
   <div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <span class="title"><span style= " color: black;">Welcome</span>
                        <?php
    echo $_SESSION["name"];
    ?></span>
                </a>
            </li>
        
       
            <li class="active">
                <a href='../admindash/indexadmin.php'>
                    <span class="icon"><ion-icon name="home"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
       
     
            <li>
                <a href='../author/book.php'>
                    <span class="icon"><ion-icon name="library"></ion-icon></span>
                    <span class="title">Books</span>
                    <span class="ic"><ion-icon name="caret-down-outline"></ion-icon></span>
                </a>
            </li>
       
      
            <li>
                <a href='../users/user.php'>
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <span class="title">Users</span>
                </a>
            </li>
            <li>
                <a href='../helps/help.php'>
                    <span class="icon"><ion-icon name="help"></ion-icon></span>
                    <span class="title">Help</span>
                </a>
            </li>
      
      
            <li>
                <a href='../issue/indexuser.php'>
                    <span class="icon"><ion-icon name="clipboard"></ion-icon></span>
                    <span class="title">Issue Books</span>
                </a>
            </li>
            <li>
                <a href="indexuser.php">
                    <span class="icon"><ion-icon name="book"></ion-icon></span>
                    <span class="title">Return Books</span>
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
        <a href='../admindash/indexadmin.php'>
        <img src="../images/logoadmin.png" onclick="audio.play();"></a>
    </div>
    </div>

   <!-- ----------------------- -->
   <div class="details">
    <div class="signup">
    <div class="cardheader">
            <h2>Return</h2>
        </div>
        <br>
<table>
<thead class='tab'>
<tr>
<td>Id</td>
<td>Name</td>
<td>Email</td>
<td>Borrowed Book</td>
<td>Borrowed Date</td>
<td>Status</td>
<td>Action</td>
</tr>
</thead>
<tbody>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['name']; ?> </td>
            <td><?php echo $row['email']; ?> </td>
            <td><?php echo $row['borrow_book']; ?> </td>
            <td><?php echo $row['borrowed_date']; ?> </td>
            <td><span class="status borrowed">Borrowed</span></td>
            <td><a onclick="return window.confirm('Are you sure you want to return?')" href="../cruds/return.php?id=<?php echo $row['id']; ?>"><span id="red"><ion-icon name="arrow-redo-outline"></ion-icon></span></a></td>
        </tr>
    <?php
    }
    ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- ----------------------------- details---------------------------------- -->     
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="indexuser.js"></script>
</body>
</html>

