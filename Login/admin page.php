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
    <title></title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
     
    <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" href="admin style.css">
</head>
<body>
   <div class="sidebar">
      <div class="sidebar-brand">

     
          <h2><span class="lab la-accusoft"></span>ALPHA tech Admin</span></h2>
       </div>
    
        <div class="sidebar-menu">
            <ul>
              <li>
                 <a href="" class="active"><span class="las la-igloo"></span>
                 <span>Dashboard</span></a>
               </li>
              <li>
                 <a href=""><span class="las la-users"></span>
                 <span>Employee</span></a>
                 <li class="nav-item has-submenu">
		<a class="nav-link" href="#"> Submenu links  </a>
		<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 1 </a></li>
			<li><a class="nav-link" href="#">Submenu item 2 </a></li>
			<li><a class="nav-link" href="#">Submenu item 3 </a> </li>
		</ul>
	</li>
              </li>  
             <li>
                  <a href=""><span class="las la-tasks"></span>
                 <span>Department</span></a>
              </li>   
              <li>
                 <a href=""><span class="las la-address-book"></span>
                  <span>Attendance</span></a>
                </li>       
               <li>
                  <a href=""><span class="las la-sign-out-alt"></span>
                  <span>Leave</span></a>
                </li>    
               <li>
                  <a href=""><span class="las la-file-excel"></span>
                  <span>Payroll</span></a>
              </li>  
             <li>
                 <a href=""><span class="las la-gift"></span>
                 <span>Holiday</span></a>
                </li>  
                      
              <li>
                  <a href=""><span class="las la-money-check"></span>
                 <span>Payheads</span></a>
                </li>   
               <li>
                 <a href=""><span class="las la-cog"></span>
                  <span>Settings</span></a>
                  
              </li>
             

            
                <?php
                 
                 ?>
             
                  <a href="log out.php" style="color:rgb(169, 74, 169);" class="passive"><span class="las la-toggle-off">Logout</a>
                  


            </ul>
        </div>
    </div>

   <div class="main-content">
      <header>
           <h2>
              
             <label for="">
                  <span class="las la-bars"></span>
             </label>  
              Dashboard
          </h2>
         <div class="search-wrapper">
             <span class="las la-search"></span>
             <input type="search" placeholder="Search here"/>
          </div>
           <div class="user-wrapper">
             <img src="/ALPHA TECH/Images/imgicon.jpg" width="40px" height="40px" alt="">
                <div>
                   <h4>Raquel Carole</h4>
                  <small>Super Admin</small>
              </div>  
           </div>
      </header>
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




   </div> 














   
       
</body>

</html>