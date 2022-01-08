<?php
$m1=$_POST['m1'];
$u1=$_POST['u1'];
$ta1=$_POST['ta1'];
$conn=mysqli_connect('localhost','root','','bloodbms');
print("<h1 align=center><FONT COLOR=ORANGE>
DATA ENTRY SUCESSFULLY DONE</FONT></h1>");

$sql="insert into donationdetail(mob,unit,address) values('$m1','$u1','$ta1')";
$result=mysqli_query($conn,$sql);
?>