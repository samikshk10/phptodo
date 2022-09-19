<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      #editdiv{
        position: absolute;
        top:30%;
        left:20%;
        background-color: whitesmoke;
        width: 50%;
        height: 230px;
        display:none;
      }

      #close-btn{
        position: absolute;
        right:0;
      }
      </style>
  </head>
  
  <body>
    <div id="editdiv">
<button class=" btn btn-secondary" id="close-btn">X</button>
    <h3 class="text-center">Edit Todo Task</h3>
    <form action='update.php' method="post"  class="m-3" id="editform">
        <input type="hidden" name="id1"  value="" id="id1">
<input type="text" name="todo1" class="form-control" value="" id="task1" placeholder="Edit Todo task" required><br>
<button type="submit" name="editbtn"  class="btn btn-success ml-4" >Edit</button>

</form>
    </div>
<div class="container py-3">
    <h1 class="text-center">TODO Application</h1>
        <form action="save-todo.php"  method="post">
            <div class="form-group">
            
            <input type="text" name="todo" placeholder="Please enter The todo" class="form-control" required>
         </div>

            <button type="submit" class="btn btn-primary mt-2">Add todo</button>
        </form>
        <table class="table mt-4">

    <tr>
  <th>ID</th>
  <th>Task</th>
      <th>Delete</th>
      <th>Edit</th>
    </tr>
    <?php 
    include 'db_config.php';
    $sql="SELECT * from todotable";
    $result=$con->query($sql);

    while($row=$result->fetch_assoc())
    {
      ?>
      <tr>
    <td ><?php echo $row['id']?></td>
      <td ><?php echo $row['task'] ?></td>
      <td><button class="btn btn-danger" onclick="return confirm('Are you Sure you want to Delete?')";><?php echo ("<a href='delete.php?id=$row[id]'><i class='fa fa-trash fa-lg' style='color:white'></i></a>");?></button></td>    
            <td><button class="btn btn-success" id="editbtn" onclick="editt('<?php echo $row['id']?>','<?php echo $row['task'] ?>')" ><i class="fa fa-edit fa-lg" style="color:white"></i></button></td> 
    </tr>
    <?php
    }
?>
    </table>

    <script>
      var n;
      var a,str;
   function editt(a,str){
     document.getElementById('editdiv').style.display="block";
  //  console.log(a);
   
    document.getElementById('id1').value=a;
    document.getElementById('task1').value=str;
    return false;
   }
   
   document.getElementById('close-btn').onclick=function()
   {
          document.getElementById("editdiv").style.display="none";
   }
    </script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>