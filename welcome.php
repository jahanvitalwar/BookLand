<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
 
   <body background="Images\background.jpg" text=#00008B>
      <h2 align=center>Welcome <?php echo $login_session; ?><br>You have logged in!</h2> 
     <!-- <h2 align=center><a href = "logout.php">Sign Out</a></h2>-->
   </body>
   
</html>