<?php

session_start();
$email = $_POST['email'];
$pass= $_POST['pw'];
$dbemail='samik@gmail.com';
$dbpw='12345';
if($email===$dbemail && $pass===$dbpw)
{
    setcookie("email",$email,time() + 5,"/");

    $_SESSION['emal']=$email;
    //5 sec time hold ;  / -> whole application
    header ('location: login.php?email='.$email);
}
else{
    header('location: login.php');
}


?>