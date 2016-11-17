<?php 
session_start();
error_reporting(0);
$name =$_POST['name'];
$username =$_POST['username'];
$password =$_POST['password'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];
$comments =$_POST['comments'];
$conn = mysqli_connect("localhost","root","","mydetail");

$query = "SELECT * FROM `admin_detail` WHERE  email='$email'";// or die(mysqli_error());
		$result =mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		
		
		if($row['email'] == $email){
			$_SESSION['useremail']= $row['email'];
			header("location:registered.php");
			
		}
		else{
			$query = "INSERT INTO `admin_detail`(`id`, `name`, `username`, `password`, `mobile`, `email`, `comments`) VALUES ('','$name','$username','$password','$mobile','$email','$comments')";
		$result =mysqli_query($conn,$query);
	    mysqli_close($conn);
		header("location:success.php");
	
		}
		
		
?>
