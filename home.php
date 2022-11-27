<?php   session_start();  ?>

<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
       <title> Home </title>
  </head>
  <body>
    <div class="form-wrapper">
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:Login.php");  
       }

          echo "<h1 style='text-align:center; margin-top:25%'>Welcome ".$_SESSION['use']."</h1>";

          echo "<h1 style='text-align:center'><a href='logout.php'> Logout</a></h1>"; 
?>
</div>
</body>
</html>