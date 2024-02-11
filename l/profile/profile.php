<?php
require '../data/setting.php';
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] == false) {
    header('Location: ../adminlog/adminlogin.php');
    exit();
}


require_once('../data/db.php');

// Get the user ID from the URL
$userId = isset($_GET['id']) ? $_GET['id'] : null;

// Fetch user details based on the ID
$query = "SELECT * FROM userlog WHERE id = " . mysqli_real_escape_string($conn, $userId);
$result = mysqli_query($conn, $query);

// Check if user exists
if (!$result || mysqli_num_rows($result) === 0) {
    // Redirect or display an error message
    header('Location: ../users/user.php');
    exit();
}

// Fetch user details
$userDetails = mysqli_fetch_assoc($result);


?>


<!-- ------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<link rel="stylesheet" href="profile.css">
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
        
       
            <li>
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
                <a href="../return/return.php">
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











   
 
<!-- ----------------------------- details---------------------------------- -->
<div id="mymodel">
    <div class="signup">
        
       <div id="image">
       <img src="../images/user.png" alt="">
       </div>
       <br>
        <div id="table">
    <table> 
        <form> 


        <tr> 
    <td>
       Id: <?php echo $userDetails['id']; ?><br> <br>
    </td>
</tr> 
<tr> 
    <td> 
        Name: <?php echo $userDetails['name']; ?><br> <br>
    </td> 
</tr> 
<tr> 
    <td>
        Email: <?php echo $userDetails['email']; ?><br><br>
    </td>
</tr> 
<tr> 
    <td>
      Contact Number: <?php echo $userDetails['contact']; ?><br> <br>
    </td>
</tr> 
<tr> 
    <td>
    Status:  <span class="status returned">Active</span><br> <br>
    </td> 
</tr>

          
        </form> 
    </table> 
    </div>

<br>
<br>





    </div>
</div>


<!-- ------------------------- -->
<div id="buu">
<a href='../users/user.php'>Go Back</a>
</div>
<!-- ------------------------------------------------------ -->
  </div>
</div>
</div>
</div>
   <!-- ionicons........................ -->
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="profile.js"></script>
</html>

