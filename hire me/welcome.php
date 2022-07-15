<?php
session_start();
if(isset($_SESSION['User']))
{
  echo 'welcome'  .$_SESSION['User'].'<br/>';
  echo '<a href ="logout.php?logout "> logout</a>';

}else{
  header("location:login.php");
} 

?>

