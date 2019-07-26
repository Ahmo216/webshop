<?php
include "../connDB.php";

        $sql="SELECT * FROM users; ";
        $results=mysqli_query($conn,$sql);
        $checkResults=mysqli_num_rows($results);
        
       ?>

