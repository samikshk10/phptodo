
<?php 
include_once 'db_config.php';
   
     $id=$_POST["id1"];
  $task=$_POST["todo1"];
      $query="update todotable set task='$task'  where id='$id'";
  $queryupdate=$con->query($query);
  echo("<script>alert('Updated successfully'); window.location.href='index.php'</script>");
  ?>
    
