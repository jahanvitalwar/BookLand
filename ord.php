<html>
<BODY bgcolor=tan text=maroon>
<?php
session_start();
if(!isset($_SESSION['login_user']))
{
   header("Location:login.html");
}

$nm=$_POST['txtnm'];
$mob=(int)$_POST['txtmob'];

$books="";

if(isset($_POST['chknr1']))
{
$bknm1=$_POST['chknr1'];
$books=$books." ".$bknm1;
}
if(isset($_POST['chknr2']))
{
$bknm2=$_POST['chknr2'];
$books=$books." ".$bknm2;
}
if(isset($_POST['chknr3']))
{
$bknm3=$_POST['chknr3'];
$books=$books." ".$bknm3;
}
if(isset($_POST['chknr4']))
{
$bknm4=$_POST['chknr4'];
$books=$books." ".$bknm4;
}
if(isset($_POST['chknr5']))
{
$bknm5=$_POST['chknr5'];
$books=$books." ".$bknm5;
}

if(isset($_POST['chkbs1']))
{
$bknm6=$_POST['chkbs1'];
$books=$books." ".$bknm6;
}
if(isset($_POST['chkbs2']))
{
$bknm7=$_POST['chkbs2'];
$books=$books." ".$bknm7;
}
if(isset($_POST['chkbs3']))
{
$bknm8=$_POST['chkbs3'];
$books=$books." ".$bknm8;
}
if(isset($_POST['chkbs4']))
{
$bknm9=$_POST['chkbs4'];
$books=$books." ".$bknm9;
}
if(isset($_POST['chkbs5']))
{
$bknm10=$_POST['chkbs5'];
$books=$books." ".$bknm10;
}


if(isset($_POST['chkart1']))
{
$bknm11=$_POST['chkart1'];
$books=$books." ".$bknm11;
}
if(isset($_POST['chkart2']))
{
$bknm12=$_POST['chkart2'];
$books=$books." ".$bknm12;
}
if(isset($_POST['chkart3']))
{
$bknm13=$_POST['chkart3'];
$books=$books." ".$bknm13;
}
if(isset($_POST['chkart4']))
{
$bknm14=$_POST['chkart4'];
$books=$books." ".$bknm14;
}
if(isset($_POST['chkart5']))
{
$bknm15=$_POST['chkart5'];
$books=$books." ".$bknm15;
}
if(isset($_POST['chkart6']))
{
$bknm16=$_POST['chkart6'];
$books=$books." ".$bknm16;
}


if(isset($_POST['chkch1']))
{
$bknm17=$_POST['chkch1'];
$books=$books." ".$bknm17;
}
if(isset($_POST['chkch2']))
{
$bknm18=$_POST['chkch2'];
$books=$books." ".$bknm18;
}
if(isset($_POST['chkch3']))
{
$bknm19=$_POST['chkch3'];
$books=$books." ".$bknm19;
}
if(isset($_POST['chkch4']))
{
$bknm20=$_POST['chkch4'];
$books=$books." ".$bknm20;
}
if(isset($_POST['chkch5']))
{
$bknm21=$_POST['chkch5'];
$books=$books." ".$bknm21;
}
if(isset($_POST['chkch6']))
{
$bknm22=$_POST['chkch6'];
$books=$books." ".$bknm22;
}


if(isset($_POST['chkcomp1']))
{
$bknm23=$_POST['chkcomp1'];
$books=$books." ".$bknm23;
}
if(isset($_POST['chkcomp2']))
{
$bknm24=$_POST['chkcomp2'];
$books=$books." ".$bknm24;
}
if(isset($_POST['chkcomp3']))
{
$bknm25=$_POST['chkcomp3'];
$books=$books." ".$bknm25;
}
if(isset($_POST['chkcomp4']))
{
$bknm26=$_POST['chkcomp4'];
$books=$books." ".$bknm26;
}
if(isset($_POST['chkcomp5']))
{
$bknm27=$_POST['chkcomp5'];
$books=$books." ".$bknm27;
}
if(isset($_POST['chkcomp6']))
{
$bknm28=$_POST['chkcomp6'];
$books=$books." ".$bknm28;
}



if(isset($_POST['chkcook1']))
{
$bknm29=$_POST['chkcook1'];
$books=$books." ".$bknm29;
}
if(isset($_POST['chkcook2']))
{
$bknm30=$_POST['chkcook2'];
$books=$books." ".$bknm30;
}
if(isset($_POST['chkcook3']))
{
$bknm31=$_POST['chkcook3'];
$books=$books.", ".$bknm31;
}
if(isset($_POST['chkcook4']))
{
$bknm32=$_POST['chkcook4'];
$books=$books." ".$bknm32;
}
if(isset($_POST['chkcook5']))
{
$bknm33=$_POST['chkcook5'];
$books=$books." ".$bknm33;
}
if(isset($_POST['chkook6']))
{
$bknm34=$_POST['chkcook6'];
$books=$books." ".$bknm34;
}


if(isset($_POST['chkexam1']))
{
$bknm35=$_POST['chkexam1'];
$books=$books." ".$bknm35;
}
if(isset($_POST['chkexam2']))
{
$bknm36=$_POST['chkexam2'];
$books=$books." ".$bknm36;
}
if(isset($_POST['chkexam3']))
{
$bknm37=$_POST['chkexam3'];
$books=$books." ".$bknm37;
}
if(isset($_POST['chkexam4']))
{
$bknm38=$_POST['chkexam4'];
$books=$books." ".$bknm38;
}
if(isset($_POST['chkexam5']))
{
$bknm39=$_POST['chkexam5'];
$books=$books." ".$bknm39;
}
if(isset($_POST['chkexam6']))
{
$bknm40=$_POST['chkexam6'];
$books=$books." ".$bknm40;
}

$cost=$_POST['txtcost'];

$conn=mysqli_connect("localhost","root","","books");
$query="INSERT INTO bookorder(name, mob, books, cost) VALUES ('$nm','$mob','$books','$cost')";
$cmnd=mysqli_query($conn,$query);
if((int)$cost!=0)
{
     if($cmnd)
    {
    echo "<center><font size=7>Order Placed Successfully";
    }

   else
   {
   echo "<center><font size=7>Please select books first";
   }
}
else
{
echo "<center><font size=7>Please calculate cost of books first";
}

?>
</body>
</html>