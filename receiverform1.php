<?php
$n1=$_POST['n1'];
$g1=$_POST['g1'];
$bg1=$_POST['bg1'];
$a1=$_POST['a1'];
$e1=$_POST['e1'];
$m1=$_POST['m1'];
if($_FILES["iname"]["error"]>0)
{
              echo"Error:".$_FILES["iname"]["error"]."<br>";
}
else
{
		$in="upload/" .$e1.".jpg";
		move_uploaded_file($_FILES["iname"]["tmp_name"] ,$in);

}
$conn=mysqli_connect('localhost','root','','bloodbms');
print("<h1 align=center><FONT COLOR=ORANGE>
REQUEST HAS BEEN SEND SUCESSFULLY</FONT></h1>");

$sql="insert into reqform (email,rn,gender,blood,age,mob,dt,images) values('$e1','$n1','$g1','$bg1','$a1','$m1',now(),'$in')";
$result=mysqli_query($conn,$sql);
$sql="select qty from stock where bgroup='$bg1' ";
$result1=mysqli_query($conn,$sql);
if(mysqli_num_rows($result1)>0)
{
	while($row=mysqli_fetch_assoc($result1))
		{
			$count=$row["qty"];
			if($count>0)	
			{
			$sql="update stock set qty=qty-1 where bgroup='$bg1' ";
			$result2=mysqli_query($conn,$sql);
			}
			else
			{
			print("<h2 align=center><FONT COLOR=BROWN>
			REQUESTED BLOOD GROUP STOCK IS NOT AVAILABLE</FONT></h2>");
			}
		}
}
?>