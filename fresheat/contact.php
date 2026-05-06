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
        $mainTitle='Contact us';
        $Title='Home';
        $Title2 = 'Contact us';
    ?>
    <?php include './partials/page-header.php'?>


    <!-- Contact Us Section    S T A R T -->
    <div class="contact-us-section section-padding fix">
        <div class="contact-box-wrapper style1">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/location.png" alt="icon"></div>
                            <h3 class="title">Our Address</h3>
                            <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/gmail.png" alt="icon"></div>
                            <h3 class="title">info@exmple.com</h3>
                            <p>Email us anytime for any kind ofquety.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/phone.png" alt="icon"></div>
                            <h3 class="title">Hot: +208-666-01112</h3>
                            <p>24/7/365 priority Live Chat and ticketing support.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/clock.png" alt="icon"></div>
                            <h3 class="title">Opening Hour</h3>
                            <p>Sunday-Fri: 9 AM – 6 PM Saturday: 9 AM – 4 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section    S T A R T -->
    <div class="contact-form-section section-padding pt-0 fix">
        <div class="contact-form-wrapper style2">
            <div class="container">
                <div class="row gx-60 gy-5">
                    <div class="col-xl-6">
                        <div class="contact-form-thumb">
                            <img src="assets/img/contact/contactThumb2_1.png" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form style2">
                            <h2>Get in Touch</h2>
                            <form class="row" id="contact-form" action="mailer.php" method="POST">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea id="message" name="message"  class="form-control" placeholder="Write your message here..."
                                        rows="5"></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                    <label for="reviewcheck">Collaboratively formulate principle capital. Progressively
                                        evolve user<span class="checkmark"></span></label>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button type="submit" class="theme-btn w-100">SUBMIT NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right-long bg-transparent text-white"></i></button>
                                </div>
                            </form>
                            <div id="form-messages"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section    S T A R T -->
    <div class="map-wrapper" style="line-height: 0;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28821.965472924858!2d89.07524545!3d25.4467646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcb92fb4d9696d%3A0x74b18fed6b93e5e5!2sNobabgonj%20National%20garden!5e0!3m2!1sen!2sbd!4v1724820772279!5m2!1sen!2sbd"
            height="550" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <!-- Footer Section Start -->
    <?php include './partials/footer.php'?>

    <!-- all js files -->
    <?php include './partials/script.php'?>   
</body>

</html>