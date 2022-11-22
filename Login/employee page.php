<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:index.php");
}
?>



     <link rel="stylesheet" href="employee style.css">
 
                           <a href="log out.php"><span class="las la-toggle-off">Logout</a>
                         
   
     
    
 </body>
</html>