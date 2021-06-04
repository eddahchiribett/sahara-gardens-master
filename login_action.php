<?php
session_start();
include('../includes/connection.php');
if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $verify = mysqli_query($connection,"SELECT * FROM users WHERE username='$username' AND password='$password'");
   if (mysqli_num_rows($verify) < 1) {
     header('Location:log_in.php?msg=1');
   }else{
     while ($row = mysqli_fetch_assoc($verify)) {
        $user_id = $row['id'];
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;

        header('Location:index.php');
     }
   }
}

 ?>
