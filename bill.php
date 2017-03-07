<?php
session_start();
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
else
{$_SESSION['login_user']='bill.php';
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include("config.php");
$query="select * from food_item where item='$u'";
$result=mysqli_query($c,$query);
if($result)
{$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 $item=$row['item'];
 $price=$row['price'];          
 header("Location: result.php?item=$item & price=$price");
}
else {$error="wrong details";
     echo"$error";}
}
?>
<html>
<head>
<style type"text/css">
p { 
    word-spacing: 30px;
}
A:LINK{COLOR:RED BACKGROUND-COLOR:BLUE}
A:VISITED{COLOR:GREEN}
body
{background:url(image_holonko_gst.jpeg);
background-size:100%;
}</style>
<title> bill </title></head>
<body>
<P><A HREF="welcome.php">HOME</A>
<BR><BR><BR><BR><BR><BR>
<font color="red">
<B><i><h1 style="text-align:center">BILL </H1></B></I></font>
<form name="FOOD ITEM"
action="" method="post">
 <p><h2 style="text-align:center"><font color="#FF00FF">FOOD ITEM</font><input type="text"
name="userid"/></p></H2>
 <h1 style="text-align:center"><input type="submit" value="CALCULATE"/></h1>
 </form>
</BODY>
</HTML>