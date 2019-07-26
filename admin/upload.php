<?php
include "../connDB.php";

if(isset($_POST['upload-btn'])){
    
$nameofProduct=$_POST['inputName'];
$category=$_POST['Category'];
$price=$_POST['price'];
$target="../img/".basename($_FILES['image']['name']);

$image=$_FILES['image']['name'];
$description=$_POST['description'];

$sql="INSERT INTO products (productName,Category,Price,Description,Image) VALUES ('$nameofProduct','$category','$price','$description','$image')";
mysqli_query($conn,$sql);

if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
    header("Location:products.php");
}else{
    echo "Upload error! ";
}
}