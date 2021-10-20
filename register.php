<html>
<body background="Images\background.jpg" text=#00008B>

<?php
$nm=$_POST['txtnm'];
$add=$_POST['txtadd'];
$mob=(int)$_POST['txtmob'];
$city=$_POST['txtcity'];
$state=$_POST['txtstate'];
$pss=$_POST['pss'];
$cpss=$_POST['cpss'];
if($pss==$cpss)
{
$conn=mysqli_connect("localhost","root","","books");
$query="INSERT INTO info(name, address, mob, city, state, pss, cpss) VALUES ('$nm','$add','$mob','$city','$state','$pss','$cpss')";
$cmnd=mysqli_query($conn,$query);

if($cmnd)
{
echo "<center><font size=5>Dear ".$nm;
echo "<br>Your Account has been Created Successfully!";
}
else
{ 
echo "<center><font size=5>Dear ".$nm;
echo "<br>Account Could not be Created";
echo "<br>Please Retry";
}
}
else
{
echo "<center><font size=5>The password did not match";
}
?>
</body>
</html>