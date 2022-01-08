<?php
$t1=$_POST['t1'];
$conn=mysqli_connect('localhost','root','','bloodbms');
$sql="select *from stock where bgroup='$t1' ";
$result=mysqli_query($conn,$sql);
echo"<h1 align=center>STOCK TABLE</h1>";
echo "<table cellpadding=15 align=center>";
print("<tr><th><font color=red>Blood Group</font></th>
	<th><font color=red>Units Available</font></th>
	</tr>");
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
		{
			echo("<tr><td align=center><font color=green>".$row["bgroup"]."</td></font>");
			echo("<td align=center><font color=blue >".$row["qty"]."</td></font></tr>");

		}
}
echo "</table>";
?>