<?php
require '../data/setting.php';
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] == false) {
    header('Location: ../adminlog/adminlogin.php');
    exit();
}


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
            </li>
      
            <li>
                <a href="book.php">
                    <span class="icon"><ion-icon name="library"></ion-icon></span>
                    <span class="title">Books</span>
                    </a>
                    </li>


            <li>
                <a href="../users/user.php">
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
        <div class="search">
            <label>
                <input type="text" placeholder="search Books" id="find" onkeyup="searchText();">
                <ion-icon name="search"></ion-icon>
            </label>
        </div>
        <div class="user"> 
            <a href='../admindash/indexadmin.php'>
                <img src="../images/logoadmin.png" onclick="audio.play();">
            </a>
        </div>
    </div>

    <!-- ----------------------------- details---------------------------------- -->

    <!-- ------------------------------- -->
    <!--cards -->
    <?php
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
    <div class="card">
        <div class="image">
            <div class="des">
                <img src="../<?php echo $row['image'];?>" alt="">
                <h3 id="find"><?php echo $row['name']; ?></h3>
                <p id="find"><?php echo $row['author']; ?></p>
                <button><a href="#">View</a></button>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>
<!--cards -->

<!--show more -->
<div class="cards">
<div class="des">
<a href="../books/book.php"><button class="btn"> Show More</button></a>
</div>
</div>

   <!-- ionicons........................ -->
   <script>
    function searchText(){
  let filter = document.getElementById('find').value.toUpperCase();
  let items = document.querySelectorAll('.card');
  console.log(filter);

  items.forEach(item => {
      let title = item.querySelector('h3').textContent.toUpperCase();
      let author = item.querySelector('p').textContent.toUpperCase();

      if (title.includes(filter) || author.includes(filter)) {
          item.style.display = ""; // Show the item if it matches the search query
      } else {
          item.style.display = "none"; // Hide the item if it doesn't match the search query
      }
  });
}
   </script>
<!--cards -->



<!--show more -->
<div class="cards">
<div class="des">
<a href="../books/book.php"><button class="btn"> Show More</button></a>
</div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="book.js"></script>
</body>

</html>

