<?php

$host='localhost:3307';
$username='root';
$password='';
$dbname='phpclass';
$con=new mysqli($host,$username,$password,$dbname);
if($con->connect_error)
{
    die($con->connect_error);
}
else{
    // echo "success";
}
?>