<?php
include'includes/connect.php';
session_start();
?>
<!DOCTYPE html>

<link href="/Bendali/files-scripts/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 

 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="Email address" autofocus name="user_name">
        <input type="password" class="form-control" placeholder="Password"  name ="user_pass">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>

    </div> <!-- /container -->


<?php
include 'includes/connect.php';
if(isset($_POST['login'])){
    
    $user_name = mysql_real_escape_string( $_POST['user_name']);
    $user_pass = mysql_real_escape_string($_POST['user_pass']);
    $encrypt = md5($user_pass);
    
    $admin_query="SELECT * FROM users WHERE user_nickname ='".$user_name."' AND user_password='".$user_pass."'";
    $row = mysql_query($admin_query);
    
if(mysql_num_rows($row)> 0){
    $_SESSION['user_name'] = $user_name;
    echo"<script>window.open('index.php','_self');</script>";
}else{
    echo"<script>alert(\"Sorry, we cannot log you in\")</script>";
    echo "<div class=\"alert alert-danger\">Username or password incorrect.</div>";
}
    
    
}
include 'include/AdminFooter.php';
?>