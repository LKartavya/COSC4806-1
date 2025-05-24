<?php
session_start();
?>

<html>
  <head>
    <title> Kartavya</title>
  </head>
  <body>
    <h1> Assignment 1 </h1>
    
    <p> Welcome , <?=$_SESSION['usernmae']?></p>
    <p> <a href = "login.php"> Click here to login </a></p>
  </body>

</html>