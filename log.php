<html>
<body background="Images\background.jpg" text=#00008B>
<?php

   $conn = mysqli_connect("localhost","root","","books");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
     {
     $name = mysqli_real_escape_string($conn,$_POST['nm']);
     $password = mysqli_real_escape_string($conn,$_POST['pss']); 
      
      $sql = "SELECT name, pss FROM info WHERE name = '$name' and pss = '$password'";
      $result= mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
     
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $name;
         
         header("location: welcome.php");
      }
else {
         $error = "Your Login Name or Password is invalid";
	 echo $error;
      }
   }
?>
   
</body>
</html>