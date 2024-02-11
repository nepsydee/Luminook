<?php
require '../data/setting.php';
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] == false) {
    header('Location: ../adminlog/adminlogin.php');
    exit();
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
                <a href='../profile/profile.php'>
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <span class="title">My Details</span>
                </a>
            </li>
       
            <li>
                <a href='indexuser.php'>
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
        <a href='../dashboard/index.php'>
        <img src="../images/logo.png" onclick="audio.play();"></a>
    </div>
    </div>

   
 
<!-- ----------------------------- details---------------------------------- -->
<div id="mymodel">
    <div class="signup">
    <form id="myForm"  method="POST" action="insertdata.php">
      <h1  id="title">Details</h1>
      <br>
      <div class="labels">
      <label for="role" id="id">Id No:</label>
      <input type="number" id="number" name="number" required>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="book">Borrowed Book:</label>
      <input type="number" id="book" name="book" required min="0">

      <label for="returnedBook">Returned Book:</label>
      <input type="number" id="returnedBook" name="returnedBook" required min="1">
      </div>
       <!-- Save and Close buttons -->
       <button type="submit" id="save-btn" name="save" >Save</button>
      <button type="" class="close-btn" >Close</button>
    </form>
  </div>
</div>
      
<!-- ------------------------------- -->

</div>
</div>
</div>
</div>
   <!-- ionicons........................ -->
</body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="indexuser.js"></script>
</html>

