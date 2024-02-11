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
<link rel="stylesheet" href="help.css">
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
                <a href='help.php'>
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
                <a href="../adminlog/logoutadmin.php">
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
    <h1>Need Help?</h1>
<br>
<br>
<section>
    <h2>Login</h2>
    <br>
    <p>
        To access the system, use your credentials to log in. Click on the "Login" button and enter your username and password.
    </p>
</section>
<br><br>

<section>
    <h2>Logout</h2><br>
    <p>
        To log out of your account, click on the "Logout" button. This will securely end your session.
    </p>
</section>
<br><br><section>
    <h2>Admin and Librarian Features</h2><br>
    <p>
        Once logged in as an administrator or librarian, you can access the following features:
    </p>
    <br>
    <ul>
    <li><span style=' font-weight: bold;'>Home:</span> View a table of all members and new join members.</li>
            <li><span style=' font-weight: bold;'>Search: </span>Search for users and books.</li>
            <li><span style=' font-weight: bold;'>Add Authors:</span> Add new authors along with their details.</li>
        <li><span style=' font-weight: bold;'>Add Users:</span> Add new users to the system with relevant details.</li>
        <li><span style=' font-weight: bold;'>Issue Book:</span> Issue books to members.</li>
        <li><span style=' font-weight: bold;'>Borrowed Books:</span> Record and manage books that have been borrowed by users.</li>
        <li><span style=' font-weight: bold;'>Returned Books:</span> Record the return of borrowed books and update inventory.</li>
       
            </ul>
            
</section>
<br><br>
<section>
    <h2>Final Thoughts</h2>
    <br>
    <p>
        Thank you for exploring the features of our Library Management System. We hope this help section has provided you with clear guidance on login, signup, and logout processes, as well as insights into the functionalities available for administrators and librarians, such as adding authors, issuing books, and managing members. The Home menu offers a convenient overview of members and new join members, while the Search menu facilitates quick searches for users and books.
    </p>
    <br>
    <p>
        If you have any further questions or need assistance, please don't hesitate to contact our support team. We are dedicated to providing you with a seamless and efficient library experience.
    </p>
</section>
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
<script src="help.js"></script>
</html>

