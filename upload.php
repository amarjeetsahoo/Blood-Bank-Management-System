<?php
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
?>