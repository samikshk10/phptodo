<?php
include 'db_config.php';
            if(isset($_GET['id']))
            {
                // echo('<script>return confirm("please delete");</script>');
                $id=(int) $_GET['id'];
                $sql="DELETE FROM todotable where id='".$id."'";
                $con->query($sql);
                
                         header('Location: index.php');
            }
            ?>