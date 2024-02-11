<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration | LUMINOOK </title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="logo">
  </div>
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="../images/ed-02.jpg">
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
<div class="signup-form">
          <div class="title">Signup</div>
        <form method="POST" action="signup.php">


        <!-- --------------------------------request signup db--------------- -->
        <?php
    include("../data/db.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];

    //verifying unique email
   $verify_query=mysqli_query($conn, "SELECT email FROM userlog WHERE email='$email'");
    //verifying unique number
    $verify_queries=mysqli_query($conn, "SELECT contact FROM userlog WHERE contact='$contact'");

if(mysqli_num_rows($verify_query) > 0){
  echo "<p style='margin-top: 10px';><span style='color: red';>This email is exist already!</p>";
    echo "<div class='text sign-up-text';><a href='javascript:self.history.back()' style='color: #F9DB00';> Go Back</a></div>";
}
elseif(mysqli_num_rows($verify_queries) > 0){
  echo "<p style='margin-top: 10px';><span style='color: red';>This contact number is exist already!</p>";
    echo "<div class='text sign-up-text';><a href='javascript:self.history.back()' style='color: #F9DB00';> Go Back</a></div>";
}
else{
   mysqli_query($conn,"INSERT INTO userlog(name,email,contact,password) VALUES('$name','$email','$contact','$password')") or die("Error Occured");
   echo "<p style='margin-top: 10px';><span style='color: #00ff22';>Registered Successfully!</p>";
    echo "<div class='text sign-up-text';><a href='../log/login.php' style='color: #F9DB00';>Go Back</a></div>";
}
}
else{

?>


<!-- ---------------------------------------------------------------------------------------------- -->

            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
              <i class="fas fa-phone"></i>
                <input type="tel" name="contact" placeholder="Enter your phone number"  minlength="10" maxlength="10" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="submit"                 
                <?php if(isset($_POST['submit']))echo 'disabled';?>value="submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip"><a href="../log/login.php" style="color: #F9DB00;">Login now</a></label></div>
            </div>
      </form>
    </div>
    <!-- ----------------------------------------------------------------- -->
    <?php
        }
      ?>
    <!-- ----------------------------------------------------------------- -->

   </div>
    </div>
  </div>
</body>
</html>

 