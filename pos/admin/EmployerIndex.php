<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
}

$username = $_SESSION['user_name'];



include("includes/AdminHeader_1.php");

?>

<html>
    <head>
        <title>Dashboard</title>
        
    </head>
    
    <body>
        
        <div class="jumbotron">
            <h1 class="h1">Welcome <?php echo $username;?> ! Today is the <?php echo date("d/m/y");?></h1>
            
        </div>
        
        
        
        
        
        
        
        
        <?php
        $sql = "SELECT * FROM products INNER JOIN members "
                ."ON products.member_id=members.member_id";
        $run = mysql_query($sql)or die(mysql_error());
       // $store_array = Array();
        
//        while ($row = mysql_fetch_array($run, MYSQL_ASSOC)) {
//    $store_array[] =  $run['product_owner'];  
//   // print_r( $store_array[]);
//    $i = 0;
//   
//    print_r(array_values($store_array));
//  
//}

//  'products.product_name', "
//                . "'products.product_description', 'products.product_owner', 'members.member_name', "
//                . "'members.member_surname',"
//                . "'products.product_state' 
//        
        ?>
        <table border="1" class="table table-hover table-bordered">
            
            <tr>
                <th>Product id</th>
                <th>Product description</th>
                <th>Product owner</th>
                <th>Product status</th>
                
            </tr>
            <?php
            $i;
              
            while ($row = mysql_fetch_array($run)){
                $i = 1;
                
            ?>
            <tr>
                <td>
                <?php
           echo $row['product_id'];
            ?>
                    </td>
                    
                    <td>
                        <?php echo $row['product_name'];?>
                    </td>
                    
                          <td>
                <?php
           echo $row['member_name']." ".$row['member_surname'];
            ?>
                    </td>
                      <td>
                <?php
           echo $row['product_tags'];
            ?>
                    </td>
                    
                          <td>
                <?php
           echo $row['product_state'];
                    $i++;
                    
            }
            ?>
                    </td>
            </tr>
        </table>
        


    
    </body>
    
    
    
</html>

<?php
include("includes/AdminFooter.php");
                    ?>
