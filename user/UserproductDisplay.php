<?php
include "../connDB.php";

        $sql="SELECT * FROM products; ";
        $results=mysqli_query($conn,$sql);
        $checkResults=mysqli_num_rows($results);
        
       ?>


