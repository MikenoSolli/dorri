<?php
require('connections.php');

session_start();
$id=$_SESSION['varName'];
echo"<script>console.log('".$id."');</script>";

$d=$_SESSION['fine'];




if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{

    $selectQuery = "SELECT fine.fine,fine.Fine_date,fine.person, fine.cost, fine.payment,person.Name, fine.Status from fine join person on fine.person=person.id where fine.id='".$d."';";
    $result = $connectQuery->prepare($selectQuery);
    $result->execute();
}

?>


<?php

require("outline.php");


?>

<div class="row g-4">
<?php while($row = $result->fetch(\PDO::FETCH_ASSOC)){?>
    ......h
                    <div class="col-sm-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Payment Details</h6>
                                
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                               
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Mistake</h6>
                                        <small></small>
                                    </div>
                                    <span><td><?php echo $row['fine']; ?></td></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Payment Number</h6>
                                        <small></small>
                                    </div>
                                    <span><td><?php echo $row['payment']; ?></td></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                               
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Ammount Due</h6>
                                        <small></small>
                                    </div>
                                    <span><?php echo $row['cost']; ?></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                               
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Car Number</h6>
                                        <small></small>
                                    </div>
                                    <span><?php echo $row['name']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="container-fluid pt-4 px-4" class="dont">
                    <button type="button" class="btn-primary btn-lg btn-block" onclick="printFunction()">Print</button>

                <div class="bg-secondary rounded-top p-4" class="dont">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">

                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end" class="dont">
                        
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="dorina">dorina</a>
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


<script>
  function printFunction() { 
    window.print(); 
  }
</script>
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