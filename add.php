<?php
session_start();
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   } 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include("config.php");
$query="INSERT INTO food_item ".
       "(item,price) ".
       "VALUES ".
       "('$u','$p')";;
$result=mysqli_query($c,$query);;
if($result)
{        
echo '<font color="#FF00FF" size="50"><center>Data Entered Succeslfully</center></font>';
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
{background:url(food-salad-healthy-lunch.jpg);
background-size:100%;
}</style>
<title> SIGN UP </title></head>
<body>
<P><A HREF="welcome.php">HOME</A>
<font color="red">
<B><i><h1 style="text-align:center"> </H1></B></I></font>
<form name="FOOD ITEM"
action="" method="post">
<BR><BR><BR><BR><BR><BR>
 <p><h2 style="text-align:center"><font color="#FF00FF">FOOD ITEM</font><input type="text"
name="userid"/></p></H2>
 <p><h2 style="text-align:center"><font color="#FF00FF">PRICE</font><input type="text" name="pass"/></p></H2>
 
 <h1 style="text-align:center"><input type="submit" value="ADD"/></h1>
 </form>
</BODY>
</HTML>