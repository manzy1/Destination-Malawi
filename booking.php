<?php

?>


<head>
    <meta charset="utf-8">
    <title>Booking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    table,th,td{
        border: 2px solid black;
        width: 1000px;
        background-color: lightgreen;
        }
    </style>
  
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 style="color:  #2C3E50;"><i class="fa fa-map-marker-alt me-3"></i>Destination Malawi</h1>
                

                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="package.php" class="nav-item nav-link">Packages</a>
                    
                    <a href="contact.php" class="nav-item nav-link active">Contact</a>
                    
                </div>
                <a href="logout.php" style="background-color: rgba(3, 3, 3, 1);" class="btn btn-primary rounded-pill py-2 px-4">LOG OUT</a>

                
            </div>
        </nav>
        <div class="container-fluid py-5 mb-5 hero-header">
           
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Welcome to our Online booking panel.</p>
                        <p class="mb-4">FIll in the necessary details </p>
                        <div style="background-color: blue">
                         <p class="mb-4" style="border: 2px solid black; "><span style="color: black; font-weight:bolder;">NOTE:</span> Please keep your <b >REFERENCE</b> number <b>SAFE</b>, You will use this number for Tracking your Booking! </p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Booking</h1>
                        <h5 class="text-white mb-4">Fill In Below</h5>
                        <fieldset>
                            <form method="post" action="book.php">
                                <div class="row g-3 text-white">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name" name="Name" required>
                                            <label for="name">Provide Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" name="Email" required>
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#dat" data-toggle="datetimepi" name="Number" required>
                                            <label for="datetime">Number</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select bg-transparent" id="select1" name="Destination">
                                                <option value="Lake Malawi">Lake Malawi</option>
                                                <option value="Mulanje Mountain">Mulanje Mountain</option>
                                                <option value="City Tour">City Tour</option>
                                            </select>
                                            <label for="select1">Destination</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" length="5" required placeholder="Date & Time" data-target="#dat" data-toggle="datetimepi" name="Reference" >
                                            <label for="datetime">Reference(Numbers only)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#dat" data-toggle="datetimepi" name="Country" required>
                                            <label for="datetime">Country</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-transparent" placeholder="For other Destinations, please specify Here" id="message" style="height: 100px" name="Notes"></textarea>
                                            
                                            <label for="message">For other Destinations, please specify Here</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-light w-100 py-3" type="submit" name="Submit" id="Submit" value="Submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                    
                </div>
               
            </div>
        </div>
        
    </div>
    <div class="container" >
        <div class="row justify-content-center">
            
            <div class="col-md-7">
                
                
                <div class="card mt-5">
                    <!--BOOKING FORM START-->
                   
                    <div class="card-header text-center">
                       
                        <h4>Booking Track/Status</h4>
                    </div>   
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" placeholder="Enter Your Reference Number" name="Reference" value="<?php if(isset($_GET['Reference'])) ?>" class="form-control">

                                </div>
                                <div class="col-md-4">
                                    <button type="submit"  class="btn btn-dark">Track</button>

                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <!-- PHP DATABASE CONN START-->
                            <div class="col-md-12">
                                <hr>
                                <?php
                                    $conn = mysqli_connect('localhost','Manzy','emmanuel','destination');

                                    if(isset($_GET['Reference'])){
                                        $Reference = $_GET['Reference'];
                                        $query = "SELECT * FROM booking WHERE Reference='$Reference'";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0){
                                            foreach($query_run as $row){
                                                ?>
                                                    <div class="form-group mb-3">
                                                        <label for="">Name</label>
                                                        <input type="text" value="<?= $row['Name']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="">Email</label>
                                                        <input type="text" value="<?= $row['Email']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="">Destination</label>
                                                        <input type="text" value="<?= $row['Destination']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="">Notes</label>
                                                        <input type="text" value="<?= $row['Notes']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="">Date & Time</label>
                                                        <input type="text" value="<?= $row['Date']; ?>" class="form-control">
                                                    </div>
                                                    <div>
                                                        <!-- STATUS SECTION START-->
                                                        <p style="display: flex;  margin-left: 470px;">
                                                        Status:  <?php $date1 = date('Y-m-d');
                                                                     $date2 = $row['Date'];
                                                            function dateDiff($date1,$date2){
                                                                $date2_ts = strtotime($date2);
                                                                $date1_ts = strtotime($date1);
                                                                $diff = $date1_ts - $date2_ts;
                                                                return round($diff/86400);

                                                            }
                                                            $dateDiff = dateDiff($date1, $date2);
                                                            //printf("$dateDiff");
                                                            if($dateDiff <= 5){
                                                                echo '<font color="green">Active</font>';
                                                            }
                                                            else{
                                                                echo '<font color="red">Expired</font>';

                                                            }
                                                        
                                                        ?>
                                                     </p>
                                                    </div>
                                                        <!-- STATUS SECTION END-->

                                                <?php
                                            }
                                            echo "<h5 colour: blue>Record Found!...</h5>";
                                        }
                                        else{
                                            echo "<h5>Record Not Found!</h5>";
                                        }
                                    }
                                    
                                ?>
                                
                            </div>
                            <!-- PHP DATABASE CONN END-->

                        </div>
                    </div>
                </div> 
                    <!--BOOKING FORM END-->

            </div>
        </div>
    </div>
    <!-- Booking end -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="index.html">Home</a>
                    <a class="btn btn-link" href="testimonial.html">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Balaka, Malawi</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+265 88 11 000 82</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>mziyaemmanuel@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/EmmanuelMziya"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100005599876908"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://github.com/manzy1"><i class="fab fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2" loading="lazy">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.042460672106!2d34.30242587436369!3d-11.620323334106107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d68eb96617537%3A0x7d5b472bbaa16725!2sNjaya%20Lodge!5e0!3m2!1sen!2smw!4v1695827282744!5m2!1sen!2smw" width="600" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;  All Right Reserved.

                        Developed By <a class="border-bottom" href="https://github.com/manzy1">Emmanuel Mziya</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
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