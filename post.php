<?php
include_once "index.php";
if (isset($_POST['product'])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $bid = $_POST['bid'];

    $db->query("CALL product_p('$pname','$price','$bid')");

    header("location:$_SERVER[PHP_SELF]");
}
if (isset($_POST["view"])) {

    header("location:view.php");

}

if (isset($_POST['submitted'])) {
    $don = $_POST['hold'];
    $db->query("delete from product where id=$don");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANother</title>
</head>

<body>

    <form action="" method="post">
        Product Name <br>
        <input type="text" name="pname"><br>
        Price <br>
        <input type="text" name="price"><br>

        Brand Name
        <select name="bid" id="">
            <?php
            $connect = $db->query("select * from brand");
            while (list($id, $bname) = $connect->fetch_row()) {
                echo "<option value='$id'>$bname</option>";
            }
            ?>
        </select>


        <br><input type="submit" name="product" value="Submit">
        <br><input type="submit" name="view" value="View">


    </form><br><br>
    <form action="" method="post">
        Brand Name
        <select name="hold" id="">
            <?php
            $connect = $db->query("select * from brand");
            while (list($id, $bname) = $connect->fetch_row()) {
                echo "<option value='$id'>$bname</option>";
            }
            ?>
        </select>
        <input type="submit" value="Delete" name="submitted">
    </form>


</body>

</html>