<?php
$e1=$_POST['e1'];
$p1=$_POST['p1'];
$conn=mysqli_connect('localhost','root','','bloodbms');
$sql="select *from donorlist where email='$e1' and pass='$p1' ";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0)
{
	print("<h1 align=center>You have Logged in Sucessfully</h1>");
	while($row=mysqli_fetch_assoc($result))
		{
			echo("<h2 align=center><font color=green>Welcome ".$row["dn"]."</font></h2>");
			echo "<table align=center>";
			echo("<style>
				a:link, a:visited 
				{
				  background-color: aqua;
 				 color: blue;
  				padding: 15px 25px;
  				text-align:center;
  				text-decoration: none;
  
				}
				a:hover, a:active {
  				background-color: grey;
						}
				</style>");
			echo"<tr><td><br><a href='DonorDonationFetch.html'>View Your Donations</a></td>";
			echo"<td><br><a href='DonorsDonationList.html'>Enter Your Donation Details</a></td></table><br><table align=center>";
			echo"<td><br><a href='DonorLogin.html'>Logout</a></td></tr></table>";
		}	
}
else
{
	print("<h4 align=center>Invalid Input Please Try Again</h4>");
}
?>