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
        $mainTitle='My Account';
        $Title='Home';
        $Title2 = 'My Account';
    ?>
    <?php include './partials/page-header.php'?>


    <!-- Account Section    S T A R T -->
    <div class="account-section section-padding fix">
        <div class="container">
            <div class="account-wrapper bg-white p-1 p-sm-4">
                <div class="row gx-40 gy-5 gy-md-0">
                    <div class="col-lg-6">
                        <div class="account-card bg-color2 p-3 p-sm-5">
                            <div class="logo text-center">
                                <img src="assets/img/logo/accountLogo.png" alt="logo">
                            </div>
                            <h3>Welcome Back</h3>
                            <p>Please Enter Your Details</p>
                            <div class="contact-form style2 bg-color2 p-0">
                                <form class="row" action="#">
                                    <div class="col-12">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-ctl">
                                            <input type="password" placeholder="Password">
                                            <div class="icon"><i class="fa-sharp fa-solid fa-eye-slash"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-6 form-group">
                                        <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                        <label for="reviewcheck">Remember For 30 days<span
                                                class="checkmark"></span></label>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <a href="#" class="text-theme-color">Forgot Password?</a>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="theme-btn rounded-5 w-100 mb-3">Log In</button>
                                    </div>
                                    <div class="col-12">
                                        <a href="https://www.google.com"
                                            class="theme-btn rounded-5 w-100 bg-white text-center text-title fw-bold"><img
                                                class="me-2" src="assets/img/logo/googleLogo.png" alt="logo"> Log In
                                            With Google</a>
                                    </div>
                                </form>

                                <h6>Don’t have an account? <a href="#" class="text-theme-color">Sign Up</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="account-thumb">
                            <img src="assets/img/profile/profile.png" alt="img">
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