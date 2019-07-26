<?php
session_start();

$username="";
$email="";
$errors=array();
$conn=mysqli_connect('localhost','root','','ws_db',3308);

if(isset($_POST['reg_button'])){
    $username=mysqli_real_escape_string($conn,$_POST['inputName']);
    $email=mysqli_real_escape_string($conn,$_POST['inputEmail']);
    $password=mysqli_real_escape_string($conn,$_POST['inputPassword']);
    $verify=mysqli_real_escape_string($conn,$_POST['inputVerify']);

    if($password!=$verify){array_push($errors,"Passwords do not match!");}
    $user_check_query="SELECT * FROM users WHERE username ='$username' or email = '$email' LIMIT 1";
    $result=mysqli_query($conn,$user_check_query);
    $user=mysqli_fetch_assoc($result);
    if($user){
        if($user['username']===$username){array_push($errors,"Username already taken");}
        if($user['email']===$email){array_push($errors,"email already registered");}
    }
    if(count($errors)==0){
        $password=md5($password);
        $query="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
        mysqli_query($conn,$query);
        $_SESSION['username']=$username;
        $_SESSION['success']="Registration successful!";
        header('location:registersuccess.php');
    }
    
  
   

    }
    




