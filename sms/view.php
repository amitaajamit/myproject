<?php 
session_start();
if(isset($_SESSION['login_user'])){
include("connection.php");
$id = $_GET['id'];
?>
<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title>School management System</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">

<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
<![endif]-->
</head>



<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
    <button type="button" class="collapsed navbar-toggle" aria-expanded="false" data-target="#bs-example-navbar-collapse-5" data-toggle="collapse">
    <span class="sr-only">Toggle</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a href="#" class="navbar-brand"><span class="brand">School Management System</span></a>
    </div>
    <ul class="nav navbar-nav">
   <li><a href="admin.php">Home</a></li>
     <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student<span class="caret"></span></a>
     <ul class="dropdown-menu">
     <li><a href="student_list.php">Student List</a></li>
    
     </ul>
     </li>
	 <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Teacher<span class="caret"></span></a>
     <ul class="dropdown-menu">
     <li><a href="teacher_list.php">Teacher List</a></li>
   	 </ul>
     </li>
    </ul>
   <ul class="nav navbar-nav navbar-right">
   <li><a href="#"><span class="glyphicon glyphicon-user"> <?php echo "Hello ".$_SESSION['login_user']."."; ?></span></a></li>
<li><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
</ul>
</div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5"> 
</div>
</nav>


	
	




<div class="table-responsive table-user">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-1 col-sm-6 col-xs-12">
<table class="table table-hover table-bordered table-responsive">
<thead>
<tr>
<th>SN</th><th>Name</th><th>Username</th><th>Password</th><th>Mobile</th><th>Email</th><th>Address</th><th>Gender</th><th>Birthday</th><th>Hobby</th><th>Comments</th>
</tr>
</thead>
<tbody>
<?php
$sql ="SELECT * FROM `login_detail` WHERE id='$id'";
$result = mysqli_query($conn,$sql) or die(mysqli_error());

 
while($row= mysqli_fetch_array($result)) {
	$id=$row['id'];
	 
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['sex']."</td>";
echo "<td>".$row['dob']."</td>";
echo "<td>".$row['hobby']."</td>";
echo "<td>".$row['comments']."</td>";
echo "</tr>";
}?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<div class="footer">
<div class="container">
<div class="row">
<div class="col-sm-4">
<ul class="list-inline footer-links">
<li><a href="#">COPYRIGHT</a></li>
<li><a href="#">PRIVACY POLICY</a></li>
</ul>
</div>
<div class="col-sm-4 text-center"><a href="http://www.facebook.com/amitaajamit" target="_blank"><img src="images/facebook.png" alt="facebook" width="50" height="50"></a><a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png" alt="twitter" width="50" height="50"></a><a href="http://www.google.com/amitaajamit" target="_blank"><img src="images/google.png" alt="google" width="50" height="50"></a>
</div>
<div class="col-sm-4">
<p>COPYRIGHT SCHOOL MANAGEMENT SYSTEM</p>
</div>

</div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php } 
else{
	header("location:signin.php");
	}
?>
