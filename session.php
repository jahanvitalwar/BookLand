<?php
   $conn = mysqli_connect("localhost","root","","books");
   session_start();
   
   $user_check=$_SESSION['login_user'];
   
   $ses_sql=mysqli_query($conn,"SELECT name FROM info WHERE name='$user_check' ");
   
   $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session=$row['name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.html");
   }
?>