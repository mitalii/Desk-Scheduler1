<?php

include 'includes/config.php';
session_start();
   
if(isset($_POST["login"]))
   { 
      
      $username = $_POST['Username'];
      $password = md5($_POST['Password']); 
      
      $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
      $res = mysqli_query($con,$sql);
      $row=mysqli_fetch_array($res);
      //echo $result; die();
		
      if($row) {
         echo $_SESSION['user'] = $row['name'];
         echo "Welcome";
         header("location: index.php");
      }else {
         echo mysqli_error($con);
      }
   }

?>