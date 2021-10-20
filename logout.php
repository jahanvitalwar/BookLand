<?php
   session_start();
if (session_status() === PHP_SESSION_ACTIVE)
{
session_destroy();
}
   if(session_destroy())
 {
 header("Location: login.html");
}
?>