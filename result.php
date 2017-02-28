<?php
$u=$_GET['item'];
$u=strtoupper (  $u );
$p=$_GET['price'];
$t=2*$p/100+$p;
ECHO <<< START
<html>
<style>
hr {
  border:none;
  border-top:1px dotted #f00;
  color:#fff;
  background-color:#fff;
  height:1px;
  width:40%;
}
td {font-family: verdana; font-size: 50px;}
</style>
<body>
<br>
<br><br>
<center><font size="50">Bill

<hr >
<br>
<table >
<tr>
<td>ITEM 
<td><p align="right">$u</p>
</tr>
<tr>
<td>PRICE  
<td><p align="right">$p</p>
</tr>
<tr>
<td>TAX
<td><p align="right">2%</p>
</tr>
</table>
<hr>
TOTAL &nbsp &nbsp &nbsp &nbsp &nbsp $t<BR>
<button id="printbutton"  onclick="window.print();" >PRINT</BUTTON>
</body>
</html>
START;
?>