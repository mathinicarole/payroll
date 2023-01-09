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
    <title>Employee page</title>
    <link rel="stylesheet" href="employee_style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
</head>
<body>

<body>

    <!--------SIDEBAR--------->

    <div class="sidebar">
        <div class="sidebar-brand"></div>
          <h2><span class="las la-crown"></span>ALPHA<span>TECH</span></h2>
        </div>

        <div class="side-menu">
            <ul>
                <li>
                    <a href=""><span class="las la-home"></span>
                     <small>Dashboard</small>
                   </a>
               </li>
               <li>
                    <a href=""><span class="las la-users"></span>
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
    </div>
  <!-----------TOP PAGE------->
 <div class="main-content">
     <header>
           <h1>
               <label for="">
                   <span class="las-la-bars"></span>
             </label>
                  Dashboard
          </h1>
          <div class="search-wrapper">
              <span class="las-la-search"></span>
               <input type="search" placeholder="Search here">
          </div>
          <div class="user-wrapper">
               <img src="/ALPHA TECH/Images/imgicon.jpg" alt="" height="60px" width="60px">
               <h3>Raquel Carole</h3>
               <small>Administrator</small>
         </div>
     </header>
 </div>
   
  <!-----------WILL MAKE CORRECTION-------->
     
  <main>
      <div class="cards">
        <div class="card-single">
            <div>
                <h1>6</h1>
                <span>Total employees</span>
            </div>
            <div>
                <span class="las la-users"></span>
            </div>
        </div>
        <div class="cards">
        <div class="card-single">
            <div>
                <h1>10</h1>
                <span>Total department</span>
            </div>
            <div>
                <span class="las la-tasks"></span>
            </div>
        </div> <div class="cards">
        <div class="card-single">
            <div>
                <h1>2</h1>
                <span>Present day</span>
            </div>
            <div>
                <span class="las la-clock"></span>
            </div>
        </div> <div class="cards">
        <div class="card-single">
            <div>
                <h1>4</h1>
                <span>Leave</span>
            </div>
            <div>
                <span class="las la-sign-out-alt"></span>
            </div>
        </div>
      </div>
       </main>



 
                           <a href="log out.php"><span class="las la-toggle-off">Logout</a>
                         
   
     
    
 </body>
</html>