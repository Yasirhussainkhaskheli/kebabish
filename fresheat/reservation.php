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

    <?php 
    $mainTitle='Reservation';
    $Title='Home';
    $Title2 = 'Reservation';
    ?>
    <?php include './partials/page-header.php'?>


    <!-- Reservation Section    S T A R T -->
    <div class="reservation-section section-padding fix">
        <div class="reservation-wrapper">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-xl-6 d-flex align-items-center">
                        <div class="get-in-touch">
                            <h2>GET IN TOUCH</h2>
                            <p class="desc">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore of magna aliqua. Ut enim ad minim veniam, made</p>
                            <div class="contact-info-wrapper">
                                <div class="contact-info">
                                    <h5>Contact</h5>
                                    <p>+012 3455 862 69</p>
                                </div>
                                <div class="contact-info">
                                    <h5>Email</h5>
                                    <p>companyInfo@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact-info-wrapper">
                                <div class="contact-info">
                                    <h5>Address</h5>
                                    <p>Jackpark, Ghana</p>
                                </div>
                                <div class="contact-info">
                                    <h5>Follow</h5>
                                    <ul class="social-media">
                                        <li> <a href="https://www.facebook.com"> <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li> <a href="https://www.youtube.com"> <i class="fa-brands fa-youtube"></i>
                                            </a> </li>
                                        <li> <a href="https://www.x.com"> <i class="fa-brands fa-twitter"></i> </a>
                                        </li>
                                        <li> <a href="https://www.instagram.com"> <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="reservation-form">
                            <div class="contact-form style2">
                                <h2>Create An <span class="text-theme-color">Reservation</span> </h2>
                                <form class="row" action="#">
                                    <div class="col-md-6">
                                        <label class="mb-2" for="date">Select Date*</label>
                                        <input id="date" type="date">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-2" for="time">Select Time*</label>
                                        <input id="time" type="time">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-2" for="phone">Give Phone Number*</label>
                                        <input id="phone" type="number" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-2" for="service">Number of Guest*</label>
                                        <input id="service" type="text" placeholder="Guest">
                                    </div>
                                    <div class="col-12">
                                        <textarea id="message" class="form-control"
                                            placeholder="Write your message here..." rows="5"></textarea>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="theme-btn w-100">BOOK A TABLE <i
                                                class="fa-sharp fa-regular fa-arrow-right-long bg-transparent text-white"></i></button>
                                    </div>
                                </form>
                            </div>
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
                        Our Chefs
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