
<?php
require('connections.php');

session_start();
$id=$_SESSION['varName'];
$name=$_SESSION['name'];
//echo"<script>console.log('".$id."');</script>";



?>
<?php


include("outline1.php");
?>               
 <div class="row g-12">
                   
                   <div class="col-12">
                        
                        
                        <h1>Car Registration</h1>
                        <br></br><br></br>
									</header>

									<form method="POST" class="form-horizontal" action="put.php"> 

										<div class="form-group">
											<section class="split">
												<section>
													<div class="contact-method">
														<span class="icon solid alt fa-name"></span>
														<h3>Plate Number</h3>
														<input type="text" name="t1" class="form-control" placeholder="Plate Number">
													</div>
												</section>
											
												
												<section>
													<div class="contact-method">
														<span class="icon solid alt fa-password"></span>
														<h3>Password</h3>
														<input type="text" name="t2" class="form-control" placeholder="Password">
													</div>
												</section>
											
											


								
											</section>

										  
										  <div class-="row">
										  <button   type="submit" value="submit" class="btn btn-success btn-lg">Register</button>
										</div>
									</div>
															

				<!-- Footer Start -->
                <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Traffic Site</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>