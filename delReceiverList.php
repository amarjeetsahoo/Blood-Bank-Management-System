<?php
$t1=$_POST['t1'];
$conn=mysqli_connect('localhost','root','','bloodbms');
$sql="delete from reqform where email='$t1' ";
$result=mysqli_query($conn,$sql);
echo"<h1 align=center><font color=blue><br>Requested Record Has Been Deleted Sucessfully</font></h1>";
echo "</table>";
?>