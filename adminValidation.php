<body bgcolor="red">
<?php
$u1=$_POST['u1'];
$p1=$_POST['p1'];
$conn=mysqli_connect('localhost','root','','bloodbms');
$sql="select *from adminlist where Uname='$u1' and pass='$p1' ";
$result=mysqli_query($conn,$sql);
echo"<img src='http://localhost/img/bl1.jpg' height='60%' width='100%'>";
if (mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
		{
			echo("<h1 align=center><font color=yellow>Welcome ".$row['Uname']."</font></h1></td></tr>");
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
			echo"<tr><td><br><a href='receiverformFetchAll.php'>Receivers Request List</a></td>";
			echo"<td><br><a href='donorformFetchAll.php'>Donor List</a></td>";
			echo"<td><br><a href='stockcheck.html'>Check Blood Stock</a></td></tr></table><br><table align=center>";
			echo"<tr><td><br><a href='delDonorList.html'>Delete Donor's Record</a></td>";
			echo"<td><br><a href='delReceiverList.html'>Delete Receiver's Record</a></td></tr></table>";
			echo"<br><table align=center><tr><td><br><a href='AdminLogin.html'>Logout</a></td></tr></table>";

		}	
}
else
{
	print("<h3 align=center>Invalid Input Please Try Again</h3>");
}
?>
</body>