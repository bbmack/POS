<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
}

$username = $_SESSION['user_name'];


include("includes/AdminHeader_1.php");


$sqlQuery = "SELECT * FROM members";
$result = mysql_query($sqlQuery) or die(mysql_error());

$tagQuery = "SELECT * FROM tags";
$tagresult = mysql_query($tagQuery);

$stateQuery = "SELECT * FROM state";
$stateResult = mysql_query($stateQuery);

?>

<link rel="stylesheet" type="text/css" href="includes/AddProductStyle.css">
<body>
    <form method="POST" action="AddProductScript.php" >
    
    <h4 class="h4">Product name:</h4>
    <input type="text"  class="form-control" name="ProductName" placeholder="Product name">
    <h4 class="h4">Product owner:</h4>
    <select name="owner" class="dropdown form-control">
        <option value="">------------ Choose a member --------------</option>
        <?php
        while($owner =  mysql_fetch_array($result)){
            ?>
        <option value="<?php echo $owner['member_id']?>"><?php echo $owner["member_name"]." ".$owner['member_surname']?></option>
       <?php
       }
        ?>
        
    </select>
        
    
    <h4 class="h4">Product description:</h4>
    <textarea rows="10" cols="30" class="form-control text-primary formInput" placeholder="A little description about the item." name="description"></textarea>
  
        
        
    <h4 class="h4">Product tags</h4>    
        <select name="tags" class="dropdown form-control">
        <option value="">------------ Choose a tag --------------</option>
        <?php
        while($tag =  mysql_fetch_array($tagresult)){
            ?>
        <option value="<?php echo $tag['tag_name']?>"><?php echo $tag["tag_name"]?></option>
       <?php
       }
        ?>
        
    </select>
    
    <h4 class="h4">Product state:</h4>    
        <select name="state" class="dropdown form-control">
        <option value="">------------ Choose a state --------------</option>
        <?php
        while($state =  mysql_fetch_array($stateResult)){
            ?>
        <option value="<?php echo $state['state_name']?>"><?php echo $state["state_name"]?></option>
       <?php
       }
        ?>
        
    </select>
    
    <br/>
    
    <input type="submit" name="ok" class="btn btn-success btn-lg">
    
</form>
    

    
    
   
    
    
    
    
    
    
    
</body>




<?php
include 'includes/AdminFooter.php';
?>