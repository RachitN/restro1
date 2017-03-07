<?php
session_start();
 if(isset($_SESSION['login_user'])){
      header("location:".$_SESSION['login_user']);
   }
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include("config.php");
$query="SELECT * FROM login where username ='$u' and password='$p' ";
$result=mysqli_query($c,$query);
$num=mysqli_num_rows($result);
if($num==1)
{        
$_SESSION['login_user'] = $u;
header("Location:welcome.php");
}
else {$error="wrong details";
     echo"$error";}
}
?>
<html>
<head>
<style type="text/css">
p { 
    word-spacing: 30px;
}
A:LINK{COLOR:RED BACKGROUND-COLOR:BLUE}
A:VISITED{COLOR:GREEN}
body
{background:url(maxresdefault.jpg) no-repeat;
background-size:105%;
}
h1{ -ms-transform: rotate(0);
-webkit-transform: rotate(0);
transform: rotate(0);
text-align:CENTER;
font-size:30px;}
</style>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br>
<form name"login" method="post" action="">
<center>
<h1>USERNAME: <input type="text" name="userid" ><br>
    PASSWORD : <input type="password" name="pass"><br>
<input type="submit" value="LOGIN"></H1>
<center>
</form>
</body>
</head>
</html>
