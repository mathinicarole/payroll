<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Employee Page</title>
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      
     <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
     <link rel="stylesheet" href="employee style.css">
 </head>
 <body>
        <div class="sidebar">
     
        <div class="sidebar-brand">
            
            <h2> <span class="lab la-accusoft"></span>ALPHA tech Employee</h2>
           
     </div>
                 <div class="sidebar-menu">
                       <ul>
                       <li>
                           <a href=""><span class="las la-igloo"></span>
                         <span>Dashboard</span></a>
                      </li>
                       <li>
                           <a href=""class="active"><span class="las la-user"></span>
                         <span>Profile</span></a>
                      </li>  
                        <li>
                         <a href=""><span class="las la-info-circle"></span>
                          <span>Details</span></a>
                     </li>   
                       <li>
                          <a href=""><span class="las la-address-book"></span>
                          <span>Attendance</span></a>
                      </li>     
                       <li>
                           <a href=""><span class="las la-comment-dots"></span>
                           <span>Messages</span></a>
                           <span class="message-count">22</span>
                      </li>    
                       <li>
                           <a href=""><span class="las la-sign-out-alt"></span>
                          <span>Leave</span></a>
                     </li>    
                       <li>
                         <a href=""><span class="las la-receipt"></span>
                          <span>Salary slips</span></a>
                      </li>  
                     <li>
                          <a href=""><span class="las la-gift"></span>
                           <span>Holiday</span></a>
                       </li>  
                      
                        <li>
                           <a href=""><span class="las la-cog"></span>
                         <span>Settings</span></a>
                         </li>

                         <div class="close">
                      
                         
                           <a href="log out.php"><span class="las la-toggle-off">Logout</a>
                           </div>
                           
                  </div>
                    
                
        </div>
     </div> 
   
     
    
 </body>
</html>