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
        <title>ALPHA TECH Payroll System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="admin_style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
    </head>
    
    <body>

        <div class="container ">
            <div class="sidebar">
                
                <h2 class="las la-crown text-white">
                    ALPHA TECH
                </h2>

                <ul>
                    <li>
                        <a href="admin_new.php"><span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                        <a href="employee_list.php"><span class="las la-users"></span>
                            <small>Employee</small>
                        </a>
                    </li>
                    <li>
                        <a href=""><span class="las la-address-book"></span>
                            <small>Attendance</small>
                        </a>
                    </li>
                    <li>
                        <a href=""><span class="las la-tasks"></span>
                            <small>Department</small>
                        </a>
                    </li>
                    <li>
                        <a href=""><span class="las la-sign-out-alt"></span>
                            <small>Leave</small>
                        </a>
                    </li>
                    <li>
                        <a href=""><span class="las la-file-excel"></span>
                            <small>Payroll</small>
                        </a>
                    </li>
                    <li>
                        <a href=""><span class="las la-gift"></span>
                            <small>Holiday</small>
                        </a>
                    </li>
                    <li>
                        <a href=""><span class="las la-money-check"></span>
                            <small>Payheads</small>
                        </a>
                    </li>
                    <li>
                        <a href=""><span class="las la-cog"></span>
                            <small>Settings</small>
                        </a>
                    </li>
                    <li>
                        <?php
                        ?>
                        <a href="log out.php" style="color:rgb(169, 74, 169);" class="passive"><span class="las la-toggle-off">Logout</a>
                    </li>
                </ul>
           
            </div>
            
            
            <div class="main text-center mt-3">

            

            </div>                    
            
        </div>

            
                
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</html>