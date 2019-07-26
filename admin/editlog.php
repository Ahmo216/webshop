<?php
include "../connDB.php";

if(isset($_GET['id'])){
   
        $id=$_GET['id'];
   
        $query="SELECT * FROM products WHERE id = {$id}";
        $result=mysqli_query($conn,$query);
        
            $row=$result->fetch_array();
            $name=$row['productName'];
            $category=$row['Category'];
            $price=$row['Price'];
            $description=$row['Description'];
            $image=$row['Image'];

        
    }

    if(isset($_POST['edit-btn'])){
        $id=$_POST['id'];
       
        $newName=$_POST['inputName'];
        $newCategory=$_POST['Category'];
        $newPrice=$_POST['price'];
        $target="../img/".basename($_FILES['image']['name']);
        
        $newImage=$_FILES['image']['name'];
        $newDescription=$_POST['description'];
        
    $sql="UPDATE products SET productName='$newName',Category='$newCategory',Price='$newPrice',Description='$newDescription',Image='$newImage' WHERE id = {$id}";
        mysqli_query($conn,$sql);
       
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            header("Location:products.php");
        }else{
            echo "Upload error! ";
        }
        }
    
    
