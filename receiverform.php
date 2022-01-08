<?php
$n1=$_POST['n1'];
$g1=$_POST['g1'];
$bg1=$_POST['bg1'];
$a1=$_POST['a1'];
$e1=$_POST['e1'];
$m1=$_POST['m1'];

$s="001";
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
print($file_name);
print($file_size);
if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/$s".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
}

$conn=mysqli_connect('localhost','root','','bloodbms');
print("<h1 align=center><FONT COLOR=ORANGE>
REQUEST HAS BEEN SEND SUCESSFULLY</FONT></h1>");

$sql="insert into reqform (email,rn,gender,blood,age,mob,dt) values('$e1','$n1','$g1','$bg1','$a1','$m1',now())";
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