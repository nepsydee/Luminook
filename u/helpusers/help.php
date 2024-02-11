<?php 
require '../data/setting.php';
if(!isset($_SESSION['is_login']) || $_SESSION['is_login']==false){
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
                <a href='help.php'>
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
    <h2>Signup</h2><br>
    <p>
        New users can sign up for an account. Click on the "Signup" button and provide the required information to create a new account.
    </p>
</section>
<br><br>

<section>
    <h2>Logout</h2><br>
    <p>
        To log out of your account, click on the "Logout" button. This will securely end your session.
    </p>
</section>
<br><br>
<section>
        <h2>User Features</h2>
        <br>
        <ul>
            <li><span style=' font-weight: bold;'>Browse Books:</span>  Explore our extensive collection of books.</li>
            <li><span style=' font-weight: bold;'>Search:</span>  Effortlessly find books and authors through our search feature.</li>
            <li><span style=' font-weight: bold;'>Borrow Books:</span>  Easily borrow books for your reading pleasure.</li>
            <li><span style=' font-weight: bold;'>Return Request:</span>  Return request for borrowed books.</li>    
            <li><span style=' font-weight: bold;'>View Borrowing History:</span>  Track your borrowing history for quick reference.</li>
        </ul>
    </section>
<br><br>
    <section>
        <h2>Home</h2>
       <p>You can search and borrow available books by simply clicking on<h4>BORROW NOW!</h4></p>
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
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="help.js"></script>
</body>

</html>