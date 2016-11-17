

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--<script src="js/main1.js" type="text/javascript"></script>-->
</head>
<body>
<div class="head-wrapper">
  <div class="container">
    <div class="icon"> </div>
    <div class="sign-btn"> <a href="signin.php" class="btn btn-sm btn-primary">Sign in</a> </div>
  </div>
</div>
<div class="form-wrap">
  <div class="container">
    <div class="row">
      <h2 class="text-center">Create your Account</h2>
      <form class="form-vertical" id="form1" action="insert_detail.php" method="post">
        <div class="col-md-8 col-sm-6 col-xs-12"> </div>
        <div id="formarea" class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <label class="control-label" for="name">Name</label>
            <br>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label class="control-label" for="username">Choose your username</label>
            <br>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label class="control-label" for="password">Create password</label>
            <br>
            <input type="text" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <label class="control-label" for="mobile">Mobile</label>
            <br>
            <input type="phone" class="form-control" id="mobile" name="mobile">
          </div>
          <div class="form-group">
            <label class="control-label" for="email">Email</label>
            <br>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          
          <div class="form-group">
            <label class="control-label" for="comments">Comments</label>
            <br>
            <textarea  class="form-control" id="comments"  name="comments"></textarea>
          </div>
          <button type="submit" class="btn btn-sm btn-primary" id="button">SignUp</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>