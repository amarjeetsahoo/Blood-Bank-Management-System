<?php
$conn=mysqli_connect('localhost','root','','bloodbms');
$sql='select *from reqform';
$result=mysqli_query($conn,$sql);
echo"<p align=center><caption><b><font color=red size=6>Request List for Blood</font></b></caption></p>";
echo "<table border=1 align=center>";
print("<tr><th><font color=red>Email</font></th>
	<th><font color=red>Name</font></th>
	<th><font color=red>Gender</font></th>
	<th><font color=red>Blood Group</font></th>
	<th><font color=red>Age</font></th>
	<th><font color=red>Mobile</font></th>
	<th><font color=red>Date & Time</font></th>
	</tr>");
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
		{
			echo("<tr><td><font color=green>".$row["email"]."</font></td>");
			echo("<td><font color=grey>".$row["rn"]."</font></td>");
			echo("<td><font color=orange>".$row["gender"]."</font></td>");
			echo("<td><font color=blue>".$row["blood"]."</font></td>");
			echo("<td><font color=blue>".$row["age"]."</font></td>");
			echo("<td><font color=blue>".$row["mob"]."</font></td>");
			echo("<td><font color=blue>".$row["dt"]."</font</td></tr>");
		}
}
echo "</table>";
?>