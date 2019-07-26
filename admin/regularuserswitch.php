<?php
require "../connDB.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
$query="UPDATE users SET user_type='user' WHERE id={$id}";
if($conn->query($query)===TRUE){
    header('Location:adminusercontrol.php');
}
else{
    echo "Error.Data cannot be updated ! ";
}
}