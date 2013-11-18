<?php 
include("includes/AdminHeader.php");
?>
<title>Add a page and help the site :)</title>
<body>
    <strong>&nbsp; Title:</strong>
   <br/>
   
    <input type="text" name="Title" id="Title" class="form-control form-inline" placeholder="Title"/>
   
    <br/>
    <br/>
<textarea rows='30' cols='100' class="form-control">

</textarea>
<br/>
<form action="AddPage.php">
    <input type="submit" action="AddPage.php"  name="submit" class="btn btn-group  btn-primary right" />
</form>
<button class="btn btn-danger btn-group " onClick="parent.location='index.php'">Cancel</button>
</body>

<?php

if($_GET["submit"] != null){
$filename = "/var/www/Bendali/test.php";
$handle = fopen($filename, 'w+') or die("Can't open file!");
}
?>

<?php 
include("includes/AdminFooter.php");
?>