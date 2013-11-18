<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
}

$username = $_SESSION['user_name'];


include("includes/AdminHeader.php");

?>

<html>
    <head>
        <title>Dashboard</title>
        
    </head>
    
    <body>
        <?php
        
        
        $sql= "SELECT * FROM members WHERE member_nickname = '".$username."'";
        $run3= mysql_query($sql) or die ("From the first sql line: ".mysql_error()." <br/>");
        $actual_name = mysql_fetch_array($run3);
        $real_name = $actual_name['member_surname'];
  
        
   
        
        
        
        $sql = "SELECT * FROM products WHERE product_owner = '".$real_name."'";
        $run2 = mysql_query($sql) or die("From the second sql statement: ".  mysql_error() );
        
        
        
        //while(next($products) != false){
        
         //echo next($products);
         
       // }
        
        ?>
        <table border="1" class="table table-hover table-bordered">
            
            <tr>
                <th>Product id</th>
                <th>Product description</th>
                <th>Product owner</th>
                <th>Product status</th>
                
            </tr>
            <?php
                    while ($products = mysql_fetch_array($run2)){
            ?>
            <tr>
                <td>
                <?php
           echo $products['product_id'];
            ?>
                    </td>
                          <td>
                <?php
           echo $products['product_description'];
            ?>
                    </td>
                      <td>
                <?php
           echo $products['product_owner'];
            ?>
                    </td>
                    
                          <td>
                <?php
           echo $products['product_state'];
            ?>
                    </td>
            </tr>
            <?php
                    }?>
        </table>
        


        
  
    </body>
    
    
    
</html>

<?php
include("includes/AdminFooter.php");

?>