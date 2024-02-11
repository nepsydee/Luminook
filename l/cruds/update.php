<?php
require '../data/setting.php';
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] == false) {
    header('Location: ../adminlog/adminlogin.php');
    exit();
}


$uid=$_GET['id'];
require "../data/db.php";
$sql = "SELECT * FROM `users` where id=$uid";
if($sqlex= mysqli_query($conn,$sql)){
    $result=mysqli_fetch_assoc($sqlex);



    }

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
                <a href='indexuser.php'>
                    <span class="icon"><ion-icon name="clipboard"></ion-icon></span>
                    <span class="title">Issue Books</span>
                </a>
            </li>
            <li>
                <a href="../return/indexuser.php">
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
   <div class="detail">
    <div class="sign">
    <form id="myForm"  method="POST" action="updatedata.php">
        <div class="cardhead">
            <h2>Update</h2>
        </div>
        <br>
        <br>
<table>
<thead class='tab'>
<tr>
<td> <label for="name">Name</label></td>
<td> <label for="email">Email</label></td>
<td> <label for="book">Borrowed Book</label></td>
<td> <label for="quantity">Book Quantity:</td>
<td> <label for="book">Borrowed Date</label></td>
<td>Action</td>
</tr>
</thead>
<tbody>
        <tr>
            
            <td> <input type="text" id="name" name="name" value= "<?php echo $result['name'] ?>" required></td>
            <td> <input type="email" id="email" name="email" value="<?php echo $result['email'] ?>" required></td>
            <td> <input type="text" id="book" name="book" value="<?php echo $result['borrow_book'] ?>" required min="0"></td>
            <td><input type="number" id="quan" name="quan" value= "<?php echo $result['quantity'] ?>" required min="1" max="3"></td>
            <td> <input type="date" id="date" name="date" value="<?php echo $result['borrowed_date'] ?>" required min="1"></td>
            <input type="hidden" value="<?php echo $result['id'] ?>" name="studentid">
            <td><button type="submit" id="save-btn" name="save" >Save</button> <button type="close" id="close-btn" >Close</button></td>
            </tr>
</tbody>
</form>
</div>
</div>
</div>
</div>
<!-- ----------------------------- details---------------------------------- -->     
   <!-- ionicons........................ -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="indexuser.js"></script>
</body>

</html>





