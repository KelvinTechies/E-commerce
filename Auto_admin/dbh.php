<?php

$mar=mysqli_connect("localhost", "root", "", "auto");

if (!$mar) {
    die('connection to database failed');
}
// if (isset($login)) {
//     if ( !empty($phone) && !empty($email) ) {
//        if (!preg_match("/^[0-9]*$/",$phone)) {
//            echo "Only Numbers are Allowed";
//        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            echo "Invalid Email Address";
//        }elseif ($phone!=$_SESSION['userInfo']['phone'] || $email!=$_SESSION['userInfo']['email']) {
//           echo 'Invalid Creds';
//        }
//        else{
            
//               echo 'Successfully Logged IN';
//                header('location:dashboard.php');
//                $_SESSION['status']='login';
//                $_SESSION['token']=@$rememberme;
//        }
?>