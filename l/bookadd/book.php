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
<link rel="stylesheet" href="book.css">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<script src="book.js"></script>
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
                <a href="../author/books.php">
                    <span class="icon"><ion-icon name="library"></ion-icon></span>
                    <span class="title">Books</span>
                    <span class="ic"><ion-icon name="caret-up"></ion-icon></span>
                    </a>
                    </li>

                    <li>
                    <a href="book.php">
                    <span class="ico"><ion-icon name="library"></ion-icon></span>
                    <span class="titl">Add</span>
                    </a>
                    </li>
                    <li>
                    <a href="../modify/book.php">
                    <span class="ico"><ion-icon name="library"></ion-icon></span>
                    <span class="titl">Manage</span>
                    </a>
                    </li>

            <li>
                <a href="../users/user.php">
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
    <form id="myForm"  method="POST" action="insert.php" enctype="multipart/form-data">
        <div class="cardhead">
            <h2>Add Books</h2>
        </div>
        <br>
        <br>
<table>
<thead class='tab'>
<tr>
<td> <label for="name">Book Image</label></td>
<td> <label for="email">Book Name</label></td>
<td> <label for="book">ISBN No</label></td>
<td><label for="qan">Author Name</label></td>
<td><label for="qan">Number of Books</label></td>
<td>Added Date</td>
<td>Action</td>
</tr>
</thead>
<tbody>
        <tr>
            <td><input type="file" id="image" name="image" accept=".png, .jpg, .jpeg" onchange="validateFile()" required></td>
            <td> <input type="text" id="name" name="name" required></td>
            <td>  <input type="text" id="num" name="num" required min="13" max="13"></td>
            <td>  <input type="text" id="author" name="author" required min="0"></td>
            <td>  <input type="number" id="book" name="book" required min="0"></td>
            <td>  <input type="date" id="date" name="date" required min="1"></td>
            <td><button type="submit" id="save-btn" name="save" >Save</button> </td>
            
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
<script src="book.js"></script>
</body>

</html>
