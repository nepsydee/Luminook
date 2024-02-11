<?php
require '../data/setting.php';
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] == false) {
    header('Location: ../adminlog/adminlogin.php');
    exit();
}


$uid=$_GET['id'];
require "../data/db.php";
$sql = "SELECT * FROM `userlog` where id=$uid";
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
                       Admin</span>
                </a>
            </li>
        
       
            <li>
                <a href='../admindash/indexadmin.php'>
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
<td> <label for="contact">Contact Number</label></td>
<td> <label for="contact">Password</label></td>
</tr>
</thead>
<tbody>
        <tr>
            <td> <input type="text" id="name" name="name" value= "<?php echo $result['name'] ?>" required></td>
            <td> <input type="email" id="email" name="email" value="<?php echo $result['email'] ?>" required></td>
            <td> <input type="tel" id="contact" name="contact" value="<?php echo $result['contact'] ?>"  minlength="10" maxlength="10" required></td>
            <td> <input type="tel" id="password" name="password" value="<?php echo $result['password'] ?>"  minlength="8" required></td>
            <td> <input type="hidden" value="<?php echo $result['id'] ?>" name="studentid"></td>
            <td><button type="submit" id="save-btn" name="save" >Save</button> <button type="close" id="close-btn" >Close</button></td>
            
        </tr>
</tbody>
</table>
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





