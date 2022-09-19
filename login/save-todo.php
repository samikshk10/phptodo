<?php

include_once 'db_config.php';
if(!$con)
{
    echo "conection failed";
}
else{
if($_SERVER['REQUEST_METHOD']==="POST")
{
$todoitem=$_POST['todo'];
$sql="INSERT INTO todotable(task) values('$todoitem')";
$con->query($sql);
 header('location:index.php');
}
}
?>