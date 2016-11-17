<?php session_start();
if(isset($_SESSION['login_user'])){
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
   <li><a href="#">Home</a></li>
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

<div class="body-wrapper">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<img src="images/admin1.jpg" class="img-responsive img-rounded" width="400px" height="300px">
</div>
<div class="col-md-6 col-sm-6 col-xs-12 content2">
<p class="text-justify small text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
<p class="text-justify lead text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
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
<?php }else{
	
	header("location:signin.php");}
?>






















