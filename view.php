<?php 
include_once "index.php";
include_once "post.php";

        $show=$db->query("select * from product_details");
     
        echo "<table border='1' style='border-collapse:collapse; width:400px; margin-top:-300px; margin-left:300px; '>  <tr>

            <th>ID</th>
            <th>Brand Name</th>
            <th>Contact</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Brand id</th>
            
        
        
        </tr>";
        while(list($id,$bname,$contact,$pname,$price,$bid)= $show->fetch_row()){
            echo  "<tr>
                <td>$id</td>
                <td>$bname</td>
                <td>$contact</td>
                <td>$pname</td>
                <td>$price</td>
                <td>$bid</td>
               

            </tr>";
            
        }
         // <td>
        // <a href='delete.php?deleteid='$id''>Delete</a>
        // </td>
        echo "</table>";
 ?>