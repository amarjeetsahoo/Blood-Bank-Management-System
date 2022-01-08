<?php
$n1=$_POST['n1'];
$g1=$_POST['g1'];
$bg1=$_POST['bg1'];
$d1=$_POST['d1'];
$p1=$_POST['p1'];
$m1=$_POST['m1'];
$e1=$_POST['e1'];

$conn=mysqli_connect('localhost','root','','bloodbms');
print("<h1 align=center><FONT COLOR=ORANGE>
REGISTRATION SUCESSFULLY DONE</FONT></h1>");

print("<h3 align=center><FONT COLOR=ORANGE>
THANK YOU</FONT></h3>");

$sql="insert into donorlist (dn,gender,blood,age,pass,mob,email,dt) values('$n1','$g1','$bg1','$d1','$p1','$m1','$e1',now())";
$result=mysqli_query($conn,$sql);
$sql="update stock set qty=qty+1 where bgroup='$bg1' ";
$result=mysqli_query($conn,$sql);

?>