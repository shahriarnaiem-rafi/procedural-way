<?php 

    $db=mysqli_connect("localhost","root","","database14");
    if(isset($_POST['brand'])){
        $bname=$_POST['bname'];
        $contact=$_POST['contact'];

        $db->query("CALL brand_p('$bname','$contact')");
        header("location:$_SERVER[PHP_SELF]");
    }
    if(isset($_POST['product'])){
        $pname=$_POST['pname'];
        $price=$_POST['price'];
        $bid=$_POST['bid'];
    
        $db->query("CALL product_p('$pname','$price','$bid')");
        header("location:$_SERVER[PHP_SELF]");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procidure</title>
</head>
<body>
    <form action="" method="post">
        Brand Name <br>
        <input type="text" name="bname"><br>
        Contact <br>
        <input type="text" name="contact"><br>

        <input type="submit" name="brand" value="Submit">

    </form><br>

    <form action="" method="post">
        Product Name <br>
        <input type="text" name="pname"><br>
        Price <br>
        <input type="text" name="price"><br>

        Brand Name
        <select name="bid" id="">
            <?php
            $connect=$db->query("select * from brand");
            while(list($id,$bname)= $connect->fetch_row()){
                echo"<option value='$id'>$bname</option>";
            }
                
            
                
            ?>
        </select>

        
        <br><input type="submit" name="product" value="Submit">

    </form>

    
</body>
</html>