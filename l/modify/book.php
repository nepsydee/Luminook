<?php
require '../data/setting.php';
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] == false) {
    header('Location: ../adminlog/adminlogin.php');
    exit();
}
?>
<?php
require_once('../data/db.php');
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
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
                    <a href="../bookadd/book.php">
                    <span class="ico"><ion-icon name="library"></ion-icon></span>
                    <span class="titl">Add</span>
                    </a>
                    </li>
                    <li>
                    <a href="book.php">
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

   
 
<!-- ----------------------------- details---------------------------------- -->
<div class="details">
    <div class="signup">
    <div class="cardheader">
            <h2>Manage Books</h2>
        </div>
        <br>
        <br>
<table>
<thead class='tab'>
<tr>
<td>Book Image</td>
<td>Book Name</td>
<td>ISBN NO.</td>
<td>Author Name</td>
<td>Available Book</td>
<td>Added Date</td>
<td>Modify</td>
</tr>
</thead>
<tbody>
<?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td id="imag"><img src="../<?php echo $row['image'];?>" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['author']; ?></td> 
            <td><?php echo $row['books']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><a href="../book crud/update.php?id=<?php echo $row['id']; ?>"><span id="green"><ion-icon name="create-outline"></ion-icon></span></a> | <a onclick="return window.confirm('Are you sure you want to delete this user?')" href="../book crud/delete.php?id=<?php echo $row['id']; ?>"><span id="red"><ion-icon name="trash-bin-outline"></ion-icon></span></a></td>
        </tr>
        <?php
    }
    ?>
</tbody>
</div>
</div>
<!-- ------------------------------- -->

</div>
</div>
</div>
</div>
   <!-- ionicons........................ -->
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="book.js"></script>
</html>

