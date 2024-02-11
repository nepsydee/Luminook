<?php
// session_start(); // Start the session to store user data

require '../data/setting.php';

    if(isset($_SESSION["is_login"]))
    {
        header("location: ../dashboard/index.php");
        exit();
    }
// Hardcoded username and password for demonstration purposes
$validUsername = 'demo_user';
$validPassword = 'demo_password';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $inputUsername = test_input($_POST['username']);
    $inputPassword = test_input($_POST['password']);
 
    require '../data/db.php';
    $sql = "SELECT * FROM userlog where email='$inputUsername' AND password='$inputPassword'" ;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  // output data of each row
  while($row = mysqli_fetch_assoc($result)) 
  {
    // echo "id: " . $row["id"]. " - Name: " . $row["name"];
    $_SESSION["userid"] = $row["id"];
   
    $_SESSION["name"] = $row["name"];
    $_SESSION["is_login"] = true;
    header("location: ../dashboard/index.php"); // Redirect to the dashboard or home page
        exit();
  }


}
else {
        // Authentication failed
        $error = 'Invalid username or password';
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration | LUMINOOK  </title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="logo">
  </div>
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="../images/ed-01.jpg">
        <div class="text">
          <span class="text-1" id="imgw">
        </div>
      </div>
      <div class="back">
        <div class="text">
          <span class="text-1">
        </div>
      </div>
    </div>
  
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              
              <!-- //////////////////////TO CHECK THE WHETHER RIGHT OR WRONG/////////////////////////////////// -->
          
              <?php if (isset($error)) : ?>
        <p style="color: red; font-size: px;"><?php echo $error; ?></p>
    <?php endif; ?>
  <!-- ////////////////////////////////////////////////////////////////////////////////////////   -->
    
              <div class="button input-box">
                <input type="submit" name="Send">
              </div>
            
              <div class="text sign-up-text">Don't have an account? <label for="flip"><a href="../sign/signup.php" style="color: #F9DB00;">Signup now</a></label></div>
            </div>
        </form> 
      </div>
      </div>
  </div>
</body>
</html>



     <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
   

