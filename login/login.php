<?php
session_start();
if(isset($_SESSION['msg']))
{
    $_SESSION['msg']=null;
}
$loggedin=isset($_SESSION['msg']);
    if(!$loggedin)
    {
       
    }
    else{
        echo "success";
    }

   





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    input[type=text],input[type=password]
    {
            width: 200px;
    }
    </style>
</head>
<body>


    <h1 class="text-center">Login Page</h1>
    <form action="welcome.php" method="post">

            Email:<input type="text" name="email" class="form-control" ><br>
            Password:<input type="password" name="pw" class="form-control">
          <button type="submit" name="sub" >Submit</button>
    </form>
</body>
</html>