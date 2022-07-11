<?php
require('connections.php');
session_start();
$name=$_SESSION['name'];

if($name==NULL){
    header( 'Location:index.php' );

}



?>


<head>
    <meta charset="utf-8">
    <title>Traffic System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


<style type="text/css">

@media print
{
.dont {display:none;}
}


</style>

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
       


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="home.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Road Safety</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <span><?php echo $name;?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="traffic.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Home</a>
               
                    <a href="all1.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>All Fines</a>
                    <a href="incomplete1.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Incomplite</a>
                    <a href="completed1.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Completed</a>

                    <div class="nav-item dropdown">
                        <a href="reg.php" class="nav-item nav-link" ><i class="far fa-file-alt me-2"></i>Register</a>
                       
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content" >
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            
                            <span class="d-none d-lg-inline-flex">Action</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
          
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                
            </nav>
            <!-- Navbar End -->



             <!-- Chart Start -->
             <div class="container-fluid pt-80 px-80">

            


         
 


  
