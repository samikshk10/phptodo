<?php
// session_start();

// $loggedin=isset($_SESSION['msg']);
//     if(!$loggedin)
//     {

//      }
//     else{
//         echo "success";
//     }
///cookie -->behavior track

//COOKIES

 $loggedin=isset($_COOKIE['email']);
     if(!$loggedin)
     {
            echo "error";
     }
    else{
        echo "success";
    }
///cookie -->behavior track

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
    <form action="cookies.php" method="post" name="form1">

            Email:<input type="text" name="email" class="form-control" id="ema" ><br>
            Password:<input type="password" name="pw" class="form-control">
            <input type="checkbox" id="check" value="remember"> Remember Me
          <button type="submit" name="sub" >Submit</button>
    </form>

    <script>
      
    <?php
    $loggedin=isset($_COOKIE['email']);
    if(!$loggedin)
    {
           echo "error";
    }
   else{
?>
  if(document.getElementById('check').checked==true)
{
document.getElementById('ema').value=<?php echo $_COOKIE['email'] ?>;
              
}

<?php }
?>
        </script>
</body>
</html>