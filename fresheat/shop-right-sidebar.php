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
    $mainTitle='Shop Right Sidebar';
    $Title='Home';
    $Title2 = 'Shop Right Sidebar';
    ?>
    <?php include './partials/page-header.php'?>

    <!-- Shop Section S T A R T -->
    <div class="shop-section section-padding fix">
        <div class="shop-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="sort-bar">
                            <div class="row g-sm-0 gy-20 justify-content-between align-items-center">
                                <div class="col-md">
                                    <p class="woocommerce-result-count">Showing 1 - 12 of 30 Results</p>
                                </div>

                                <div class="col-md-auto">
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="single-select" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Default Sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-md-auto">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-grid-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-grid" type="button" role="tab"
                                                aria-controls="pills-grid" aria-selected="true"><i
                                                    class="fa-solid fa-grid"></i></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-list" type="button" role="tab"
                                                aria-controls="pills-list" aria-selected="false"><i
                                                    class="fa-solid fa-list"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                aria-labelledby="pills-grid-tab" tabindex="0">
                                <div class="dishes-card-wrap style2">
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_1.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_2.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Egg and Cucumber</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$28.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_3.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Fried Rice</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$20.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_4.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Leg Piece</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$58.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dishes-card-wrap style2">
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_1.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_2.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Egg and Cucumber</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$28.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_3.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Fried Rice</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$20.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_4.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Leg Piece</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$58.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dishes-card-wrap style2">
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_4.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_5.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Egg and Cucumber</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$28.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_3.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Fried Rice</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$20.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_4.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Leg Piece</h3>
                                            </a>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$58.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab"
                                tabindex="0">
                                <div class="dishes-card-wrap style3">
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_1.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_2.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Egg and Cucumber</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$28.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_3.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Fried Rice</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$20.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_4.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Leg Piece</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$58.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="assets/img/dishes/dishes2_1.png" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="assets/img/food-items/circleShape.png" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.php">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="assets/img/icon/star2.svg" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.php" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class="previous" href="shop.php"><i
                                            class="fa-sharp fa-light fa-arrow-left-long"></i></a></li>
                                <li><a class="page-numbers" href="shop.php">1</a></li>
                                <li><a class="page-numbers active" href="shop.php">2</a></li>
                                <li><a class="page-numbers" href="shop.php">3</a></li>
                                <li><a class="page-numbers" href="shop.php">...</a></li>
                                <li><a class="next" href="shop.php"><i
                                            class="fa-sharp fa-light fa-arrow-right-long"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Search
                                </h5>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button><i class="fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Search
                                </h5>
                                <ul class="tagcloud">
                                    <li><a href="shop.php">Cheese</a></li>
                                    <li><a href="shop.php">Cocktail</a></li>
                                    <li><a href="shop.php">Drink</a></li>
                                    <li><a href="shop.php">Uncategorized</a></li>
                                    <li><a href="shop.php">Pizza</a></li>
                                    <li><a href="shop.php">Non Veg</a></li>
                                </ul>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Filter By Price
                                </h5>
                                <div class="range__barcustom">
                                    <div class="slider">
                                        <div class="progress" style="left: 15.29%; right: 58.9%;"></div>
                                    </div>
                                    <div class="range-input">
                                        <input type="range" class="range-min" min="0" max="10000" value="2500">
                                        <input type="range" class="range-max" min="100" max="10000" value="7500">
                                    </div>
                                    <div class="range-items">
                                        <div class="price-input">
                                            <div class="price-wrapper d-flex align-items-center gap-1">
                                                <div class="field">
                                                    <span>Price:</span>
                                                </div>
                                                <div class="field">
                                                    <span>$</span>
                                                    <input type="number" class="input-min" value="100">
                                                </div>
                                                <div class="separators">-</div>
                                                <div class="field">
                                                    <span>$</span>
                                                    <input type="number" class="input-max" value="1000">
                                                </div>
                                                <a href="shop.php" class="filter-btn mt-2 me-3">Filter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Filter By Price
                                </h5>

                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="assets/img/shop/recentThumb1_1.png" alt="menu-thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="shop.php"> Ruti With Beef Slice </a>
                                        <div class="star"><img src="assets/img/icon/star3.svg" alt="icon"></div>
                                        <div class="price">
                                            <div class="regular-price">35$</div>
                                            <div class="offer-price">25$</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="assets/img/shop/recentThumb1_2.png" alt="menu-thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="shop.php"> Fast Food Combo </a>
                                        <div class="star"><img src="assets/img/icon/star3.svg" alt="icon"></div>
                                        <div class="price">
                                            <div class="regular-price">95$</div>
                                            <div class="offer-price">75$</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="assets/img/shop/recentThumb1_3.png" alt="menu-thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="shop.php"> divicious Salad </a>
                                        <div class="star"><img src="assets/img/icon/star3.svg" alt="icon"></div>
                                        <div class="price">
                                            <div class="regular-price">65$</div>
                                            <div class="offer-price">55$</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="assets/img/shop/recentThumb1_4.png" alt="menu-thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="shop.php"> Chiness Pasta </a>
                                        <div class="star"><img src="assets/img/icon/star3.svg" alt="icon"></div>
                                        <div class="price">
                                            <div class="regular-price">45$</div>
                                            <div class="offer-price">35$</div>
                                        </div>
                                    </div>
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