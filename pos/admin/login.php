<?php
include'includes/connect.php';
session_start();
?>
<!DOCTYPE html>


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
        <input type="text" class="form-control" placeholder="Username" autofocus name="user_name">
        <input type="password" class="form-control" placeholder="Password"  name ="user_pass">
        <br/>
        
            <button class="btn btn-lg btn-primary btn-block form-control" type="submit" name="login">Sign in</button>
            
            <h4 class="form-signin-heading">Login as:</h4>
            <select name="privileges" class="form-control dropdown " >
            <option value="2" selected>Customer</option>
            <option value="1">Admin</option>
            <option value="assistant">Sales assistant</option>
        </select>
      </form>

    </div> <!-- /container -->
     <!-- Place this asynchronous JavaScript just before your </body> tag -->
    


<?php
include 'includes/connect.php';
if(isset($_POST['login'])){
    
    $user_name = mysql_real_escape_string( $_POST['user_name']);
    $user_pass = mysql_real_escape_string($_POST['user_pass']);
    $encrypt = md5($user_pass);
    
    $priv = $_POST['privileges'];
    
//    if($_POST['privileges'] == "customer"){
//        $priv = "User";
//    }elseif ($_POST['privileges'] == "admin") {
//        $priv = "Admin";
//    }
//    
    $admin_query="SELECT * FROM users INNER JOIN members ON users.user_id=members.member_id WHERE username ='".$user_name."' AND password ='".$user_pass."' AND privliges_id= '".$priv."' ";
    $row = mysql_query($admin_query) or die(mysql_error());

        

if($priv === 2 && mysql_num_rows($row) > 0){
   
    
    $_SESSION['user_name'] = $user_name;
    echo"<script>window.open('index.php','_self');</script>";
    
    
    
}elseif ($priv == 1 && mysql_num_rows($row)> 0) {
    
      $_SESSION['user_name'] = $user_name;
      $_SESSION['name'] = $row['name'];
         
    echo"<script>window.open('EmployerIndex.php','_self');</script>";
    
    }else{
    echo"<script>alert(\"Sorry, we cannot log you in. You have the wrong username or password or you don't have permission to access that.\")</script>";
    echo "<div class=\"alert alert-danger\" align=\"center\">Username or password incorrect or you don't have permission.</div>";
}
    
    
}
include 'includes/AdminFooter.php';
?>
 
  </body>