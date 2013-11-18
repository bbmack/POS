    <?php
 
    
    $con = mysqli_connect("db4free.net:3306/", "mrsale", "pointofsale", "pointofsale");


    
    $nameData = $_POST['ProductName'];
    $ownerData = $_POST['owner'];
    $descriptionData = $_POST['description'];
    $tagData = $_POST['tags'];
    $stateData = $_POST['state'];
    
    
     
     $productQuery = "INSERT INTO `products` (product_name, product_owner, product_description,"
             . "product_tags, product_state) VALUES ('".$nameData."', '".$ownerData."', '"
             .$descriptionData."', '".$tagData."', '".$stateData."')";
     
   mysqli_query($con, $productQuery) or die(mysqli_error($con));
   
   header("Location: AddProduct.php") or die("Error");
     
   
?>