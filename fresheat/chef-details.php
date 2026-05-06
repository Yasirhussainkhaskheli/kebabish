<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<?php $title='Fresheat Food & Restaurant PHP Template'?>
<?php include './partials/head.php'?>

<body class="bg-color2">

     <!-- Preloader Start -->
     <?php include './partials/preloader.php'?>

    <!-- Back To Top Start -->
    <?php include './partials/scroll-up.php'?>

    <!--<< Mouse Cursor Start >>-->  
    <?php include './partials/mouse-cursor.php'?>

    <!-- Offcanvas Area Start -->
    <?php include './partials/sidebar.php'?>

    <!-- Header Section Start -->
    <?php include './partials/header.php'?>

    <!-- Search Area Start -->
    <?php include './partials/search.php'?>  

    <!-- Breadcumb Section   S T A R T -->

    <?php 
        $mainTitle='Chef Details 01';
        $Title='Home';
        $Title2 = 'Chef Details 01';
    ?>
    <?php include './partials/page-header.php'?>


    <!-- Chefe Details Section    S T A R T -->
    <div class="chefe-details-section section-padding fix">
        <div class="container">
            <div class="row gy-5 gx-60">
                <div class="col-xl-6">
                    <div class="chefe-thumb">
                        <img class="img-fluid" src="assets/img/chefe/chefeThumb2_1.png" alt="chefThumb">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="chefe-details-wrapper style1">
                        <h2>Ronald Richards</h2>
                        <h6>senior cooker</h6>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit food voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>
                        <h5>Skills:</h5>
                        <div class="progress-wrap wow fadeInUp" data-wow-delay=".2s">
                            <div class="progress-meta">
                                <div class="title">Cooking Chiness</div>
                                <div class="percentage">86%</div>
                            </div>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 86%;">
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap wow fadeInUp" data-wow-delay=".5s">
                            <div class="progress-meta">
                                <div class="title">Serve Managment</div>
                                <div class="percentage">95%</div>
                            </div>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 95%;">
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap wow fadeInUp" data-wow-delay=".9s">
                            <div class="progress-meta">
                                <div class="title">Human Interacation</div>
                                <div class="percentage">75%</div>
                            </div>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;">
                                </div>
                            </div>
                        </div>
                        <div class="follow-area">
                            <h5 class="mb-3"> Follow on </h5>
                            <ul class="social-media">
                                <li> <a href="https://www.facebook.com"> <i class="fa-brands fa-facebook-f"></i> </a>
                                </li>
                                <li> <a href="https://www.youtube.com"> <i class="fa-brands fa-youtube"></i> </a> </li>
                                <li> <a href="https://www.x.com"> <i class="fa-brands fa-twitter"></i> </a> </li>
                                <li> <a href="https://www.instagram.com"> <i class="fa-brands fa-instagram"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chefe Section    S T A R T -->
    <div class="chefe-section fix section-padding bg-white ">
        <div class="chefe-wrapper style1">
            <div class="container">
                <div class="title-area">
                    <div class="title  wow fadeInUp" data-wow-delay="0.7s">
                        Other Chefs
                    </div>
                </div>
                <div class="chefe-card-wrap style1 pb-5">
                    <div class="row gy-5 gx-80">
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="assets/img/chefe/chefeThumb2_1.jpg" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.php">
                                        <h3>Devon Lane</h3>
                                    </a>
                                    <p>President of Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="assets/img/chefe/chefeThumb2_2.jpg" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>

                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.php">
                                        <h3>Ralph Edwards</h3>
                                    </a>
                                    <p>Chefe Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="assets/img/chefe/chefeThumb2_3.jpg" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>

                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.php">
                                        <h3>Marvin McKinney</h3>
                                    </a>
                                    <p>Main Chefe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Footer Section Start -->
    <?php include './partials/footer.php'?>

    <!-- all js files -->
    <?php include './partials/script.php'?>   
</body>

</html>