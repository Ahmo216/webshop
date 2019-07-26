<?php
include "connDB.php";
session_start();
$errors=array();


if(isset($_POST['login-btn'])){

    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $password=md5($password);

   
    $query="SELECT * FROM users WHERE username ='$username' AND password='$password'";
    $results=mysqli_query($conn,$query);
   
 
    $row=mysqli_fetch_array($results);
    

    

    $type=$row['user_type'];
    
    $userfound=mysqli_num_rows($results);
    
    
    if($userfound==1){
        $_SESSION["type"]=$row['user_type'];
        $_SESSION["username"]=$row['username'];
     

      
        if($type=="admin"){
            header("Location:admin/adminpage.php");
          
        }
        else{
            header("Location:user/userpage.php");
            
        }
    
      
    }
   

}else {
    array_push($errors,"Wrong username or password ! ");
} 