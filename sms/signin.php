<?php
session_start();
$error='';
if(isset($_POST['submit'])){
	if(empty($_POST['username']) || empty($_POST['password']) ){
		$error ='<span style="color:red">Username or pwd is invalid</span>';
	}
	else
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		//establishing a connection
		
		$conn = mysqli_connect("localhost","root","","mydetail");
		if(!$conn){
			die("could not connect".mysqli_connect_error());
		}
		$username = stripslashes($username);
		$password = stripslashes($password);
		
	//$username = mysqli_escape_string($username);
	//$username = mysqli_escape_string($password);
		
		//select db
		//$db = mysqli_select_db("mydetail",$conn);
		$query = "SELECT * FROM `admin_detail` WHERE username='$username' AND password='$password'";// or die(mysqli_error());
		$result =mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if($row['username'] == $username && $row['password'] ==  $password){
			
			$_SESSION['login_user'] = $username;  //session initialized
			
			header("location:admin.php");
		}
		else{$error = '<span style="color:red">Username or pwd is invalid</span>';
		}
		
		mysqli_close($conn);
	}
}
?>



<script>
$(document).ready(function(){
	$('#button').click(function(){
	
	
	
	});
	
	
	
});
</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link  rel="stylesheet" href="css/main1.css">
</head>

<body>

<div class="form-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-2 col-xs-12"></div>
      <div class="col-md-6 col-sm-8 col-xs-12" id="login-form">
        <h2 class="text-center">Admin Login</h2>
        <hr>
        <div class="myform">
          <form method="post" id="loginform" action="">
          <div class="form-group">
            <label class="control-label" for="username">UserName:</label>
            <br>
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
            <span><?php echo $error ?></span><br>
          </div>
          <div class="form-group">
            <label class="control-label" for="password">Password:</label>
            <br>
            <input type="password" class="form-control" id="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"><br>
          
            <span><?php echo $error ?></span><br>
          </div>
            
            <button class="btn btn-block btn-primary" type="submit" name="submit">Login</button>
          </form>
          </form>
          <br>
        <div class=""col-md-3 col-sm-2 col-xs-12"></div>
        </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>