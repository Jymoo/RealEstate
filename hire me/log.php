<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'register.php';
session_start();


if(isset($_POST['login']))
{
  if(empty($_POST['username']) && empty($_POST['pass']) ){
    header("location:login.php?Empty= fill in the details");    
  }else{
    $username =$_POST['username'];
   $password =$_POST['pass'];
    $query = "SELECT * FROM clients WHERE username='$username' and passwordt='$password'";
    $result =mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0) 
     {
       $_SESSION['User']=$_POST['username'];
       header("location:welcome.php");
       

    

    }else{
      header ("location:login.php?Invalid=please enter correct username or password ");
    }

  }
  
   
  

}
 

   
?>
 