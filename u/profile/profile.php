<?php
require '../data/setting.php';
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] == false) {
    header('Location: ../dashboard/index.php');
    exit();
}


require_once('../data/db.php');
//now code of the to show the record 
$query = "SELECT * FROM userlog";
$result = mysqli_query($conn, $query);

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
                    <span class="title"><span style= " color: white;">Welcome</span>
                        <?php
    echo $_SESSION["name"];
    ?></span>
                </a>
            </li>
        
       
            <li>
                <a href='../dashboard/index.php'>
                    <span class="icon"><ion-icon name="home"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
       
            <li>
            <a href='profile.php'>
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <span class="title">My Details</span>
                </a>
            </li>
     
            <li>
                <a href='../issueuser/indexuser.php'>
                    <span class="icon"><ion-icon name="clipboard"></ion-icon></span>
                    <span class="title">Notice</span>
                </a>
            </li>
       
      
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="time"></ion-icon></span>
                    <span class="title">History</span>
                </a>
            </li>
      
            
            <li>
                <a href='../helpusers/help.php'>
                    <span class="icon"><ion-icon name="help"></ion-icon></span>
                    <span class="title">Help</span>
                </a>
            </li>
       
            <li>
            <a onclick="return window.confirm('Are you sure you want to logout?')" href="../log/logout.php" ?>
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
        <img src="../images/logo.png" onclick="audio.play();"></a>
    </div>
    </div>
<!-- ----------------------------- details---------------------------------- -->
<div id="mymodel">
    <div class="signup">
    <form method="POST"> 
       <div id="image">
       <img src="../images/user.png" alt="">
       </div>
       <br>
        <div id="table">
    <table> 
        <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr> 
    <td>
       Id: <?php echo $row['id']; ?><br> <br>
    </td>
</tr> 
<tr> 
    <td> 
        Name: <?php echo $row['name']; ?><br> <br>
    </td> 
</tr> 
<tr> 
    <td>
        Email: <?php echo $row['email']; ?><br><br>
    </td>
</tr> 
<tr> 
    <td>
      Contact Number: <?php echo $row['contact']; ?><br> <br>
    </td>
</tr> 
<tr> 
    <td>
    Status:  <span class="status returned">Active</span><br> <br>
    </td> 
</tr>
<?php
    }
    ?>
          
        
    </table> 
    </form> 
    </div>

<br>
<br>





    </div>
</div>


<!-- ------------------------- -->
<!-- <div id="buu">
<a href='../users/user.php'>Go Back</a>
</div> -->
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

