<?php
session_start();
if($_SERVER['REQUEST_METHOD']==="POST")
{
$email = $_POST['email'];
$pass= $_POST['pw'];
$dbemail='samik@gmail.com';
$dbpw='12345';

if($email===$dbemail && $pass===$dbpw)
    {
    
    $_SESSION['msg']=true;
    header('location:login.php');
    }

else{
   $_SESSION['msg']=null;
    header('location:login.php');
    }
}
?>