

<html>
<head>
 <!---   <link href="files-scripts/bootstrap.min.css" rel="stylesheet" media="screen"> --->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 

 <?php
include("includes/connect.php");
?>







<!--Navbar-->
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Bendali</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/Bendali">View site</a></li>
      <li><a href="AboutUs">About</a></li>
      <li><a href="logout.php">Logout</a></li>
      <li><a href="AddProduct.php">Add a new product</a></li>
      <li><a href="EmployerIndex.php">View all products</a></li>
     
    </ul>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
<div class="navbar-right">    


<?php

?>


<button type="button" class="btn btn-default btn-lg" disabled="disabled">Welcome <?php echo $username ?> </button>








  

</div>
  </div><!-- /.navbar-collapse -->
</nav>

