
<?php 
include_once 'db_config.php';
if($_SERVER['REQUEST_METHOD']==="POST")
{
     $id=$_POST["id1"];
  $task=$_POST["todo1"];
      $query="update todotable set task='$task'  where id='$id'";
  $queryupdate=$con->query($query);
  $msg="Data Updated Successfully";
  header('location:index.php?msg='.$msg);}
  ?>
    
