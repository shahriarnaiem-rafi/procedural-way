<?php 

    $db=mysqli_connect("localhost","root","","database14");
    if(isset($_POST['brand'])){
        $bname=$_POST['bname'];
        $contact=$_POST['contact'];

        $db->query("CALL brand_p('$bname','$contact')");
           
        
        header("location:$_SERVER[PHP_SELF]");
}
if(isset($_POST["posted"])){
    header("location:post.php");
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
        <br><input type="submit" name="posted" value="post">

    </form><br>
    
</body>
</html>