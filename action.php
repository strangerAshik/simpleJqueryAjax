<?php 
include_once('db.php');
$name=$_POST['name'];
$age=$_POST['age'];

if(mysql_query("INSERT INTO `user`(`name`, `age`) VALUES ('$name','$age')")){
	echo"successfully Inserted!!";
}
else {echo "Insertion failed";}


?>