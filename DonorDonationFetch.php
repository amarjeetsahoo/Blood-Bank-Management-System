<?php
$t1=$_POST['t1'];
$conn=mysqli_connect('localhost','root','','bloodbms');
$sql="select *from donationdetail where mob='$t1' ";
$result=mysqli_query($conn,$sql);
$r=mysqli_num_rows($result);
echo"<p align=center><b><font color=cyan size=5>Your Donation Details</font></b></p>";
echo "<table border=1 align=center>";
print("<tr><th><font color=red>Units Donated</font></th>
	<th><font color=red>Donation Address</font></th>
	</tr>");
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
		{
			echo("<tr><td><font color=green>".$row["unit"]."</td></font>");
			echo("<td><font color=blue>".$row["address"]."</td></font></tr>");
		}
}
echo "</table>";
?>