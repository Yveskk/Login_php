<?php  session_start();   // session starts with the help of this function 
$incorrect = false;
if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['username'];
     $pass = $_POST['password'];

      if($user == "admin" && $pass == "ucao")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            $incorrect = true;       
        }
}
 ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title> Login Page   </title>

</head>

<body>

<div class="form-wrapper">
  <form action="#" method="post">
      <h1 style="text-align:center">Login to Account</h1>
      <p style="text-align:center"><?php if($incorrect) echo "invalid UserName or Password";  ?></p>
      <div class="form-item">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username" autofocus required></input>
      </div>
      <div class="form-item">
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="Password" required></input>
      </div>
      <div class="button-panel">
        <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
      </div>
  </form>
</div>

</body>
</html>