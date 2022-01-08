<?php
$n=$_POST['n'];
$g=$_POST['g'];
$bg=$_POST['bg'];
$p=$_POST['p'];
$m=$_POST['m'];
$a=$_POST['a'];
$e=$_POST['e'];

$conn=mysqli_connect('localhost','root','','bloodbms');

$sql="update donorlist set dn='$n',gender='$g',blood='$bg',pass='$p',mob='$m',age='$a' where email='$e' ";
$result=mysqli_query($conn,$sql);

print("<h1 align=center><FONT COLOR=ORANGE>
UPDATE SUCESSFULLY DONE</FONT></h1>");


?>