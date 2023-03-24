<?php
    $recent_page = 'Home';
    include('layout/db.layout.php'); 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome | PB Creative Enterprise</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px !important;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1 !important; 
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888 !important; 
        }
        
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555 !important; 
        }
    </style>
    <!--/Header-->
    <?php include('layout/header.layout.php'); ?>
    <!--//Header-->
    <!--/Banner-Start-->
    <!--/main-slider -->
    <section class="w3l-main-slider banner-slider position-relative" id="home">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <h5 style='line-height:33px !important;'>PB Creative Enterprise</h5>
                            <h3 class="title-hero-19">Your #1 Content Creation and Personal Redevelopment Enterprise.</h3>
                            <a href="/about" class="btn btn-style btn-banner mt-sm-5 mt-4">About Us <i class="fas fa-arrow-right ms-lg-4 ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                $AllCategory = "SELECT * FROM posts_categories";
                $AllCategoryResult = $con->query($AllCategory);
                if ($AllCategoryResult -> num_rows > 0) { 
                    $category_count = mysqli_query($con,"SELECT COUNT(*) As total_category_count FROM `posts_categories`");
                    $total_category_count = mysqli_fetch_array($category_count);
                    $total_category_count = $total_category_count['total_category_count'];

                    while($categories_row = mysqli_fetch_array($AllCategoryResult)){
                        #cg = latest post
                        $cg_header = $categories_row["category"];
                        $cg_description = $categories_row["category_description"];
                        $cg_link = $categories_row["category_link"];

                        for ($i=2; $i < $total_category_count; $i++) {}
                        #find a solution to this later
            ?>
            <div class="item">
                <div class="slider-info banner-view banner-top<?php echo $i;?>">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <h5 style='line-height:33px !important;'><?php echo $cg_header;?></h5>
                            <h3 class="title-hero-19"><?php echo strtolower($cg_description);?></h3>
                            <a href="/category/<?php echo $cg_link;?>/index" class="btn btn-style btn-banner mt-sm-5 mt-4">Read More <i class="fas fa-arrow-right ms-lg-4 ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </section>
    <!-- //main-slider -->
    <!--/features-section -->
    <section class="w3l-features py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-md-5 mb-4">
                <h6 class="title-subw3hny mb-1">Who We Are</h6>
                <h3 class="title-w3l mb-5">We are Writers, Speakers and Content Experts.</h3>
            </div>
            <div class="main-cont-wthree-2 align-items-center text-center pt-lg-4">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Profitable Networking</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-toolbox"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Relationship Insights</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-podcast"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Audience Analysis</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features section -->
    <!--/w3l-midslider-->
    <section class="w3l-midslider py-5" id="midslider">
        <!-- /grids -->
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-7 stats_info-images pe-lg-5">
                    <div class="stats_info-images-right row">
                        <div class="col-6 mid-slider-content">
                            <img src="assets/images/ab1.jpg" class="img-fluid radius-image" alt="">
                        </div>
                        <div class="col-6 mid-slider-content">
                            <img src="assets/images/ab2.jpg" class="img-fluid radius-image" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 title-content text-left ps-lg-5 mt-lg-0 mt-5">
                    <h6 class="title-subw3hny mb-1">Why Us</h6>
                    <h3 class="title-w3l mb-3">Creative Approach to Master Mind Content Creation on Every Project.</h3>
                    <p class="mb-3" style='display:none;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla non ipsum soluta
                        perferendis
                        veniam qui esse magnam commodi quisquam.</p>
                    <ul class="icon-list-items mt-3">
                        <li class="icon-list-item">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Innovative approach
                        </li>
                        <li class="icon-list-item mt-2">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Professional service
                        </li>
                        <li class="icon-list-item mt-2">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Content development and delivery advisory
                        </li>
                    </ul>
                </div>
                <!--/grids -->
            </div>
            <!--/grids -->
        </div>
    </section>
    <!--//w3l-midslider-->
    <!--/bottom-3-grids-->
	<div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

         
    </div>
    <div class="w3l-3-grids py-5" id="grids-3" style="display: none;">
        <div class="container py-md-5 py-2">
            <!--/row-1-->
            <div class="row mb-5 pb-lg-4">
                <div class="col-lg-4 pe-lg-4">
                    <div class="title-content text-left">
                        <h6 class="title-subw3hny mb-1">About Us</h6>
                        <h3 class="title-w3l">The best solutions for your business </h3>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-md-5 mt-4 ps-lg-4">
                    <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                        elit ipsum dolor.</p>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-md-5 mt-4 ps-lg-4">
                    <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                        elit ipsum dolor.</p>
                </div>
            </div>
            <!--//row-1-->
            <div class="row pt-md-0 pt-5">
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-4 px-lg-0">
                    <div class="grids3-info position-relative">
                        <a href="#" class="d-block zoom"><img src="assets/images/g1.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info">
                            <h6><a href="#category" class="category d-block">01</a></h6>
                            <h4 class="gdnhy-1"><a href="#">Your Business Consulting</a>
                                <a class="w3item-link" href="#">
                                    <i class="fas fa-arrow-right ms-lg-4"></i>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4 px-lg-0 grids3-info2">
                    <div class="grids3-info second position-relative">
                        <a href="blog-single.html" class="d-block zoom"><img src="assets/images/g2.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info second">
                            <h6><a href="#category" class="category d-block">02</a></h6>
                            <h4 class="gdnhy-1"><a href="#">Financial Audit Services</a>
                                <a class="w3item-link" href="#">
                                    <i class="fas fa-arrow-right ms-lg-4"></i>
                                </a>
                            </h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 px-lg-0">
                    <div class="grids3-info position-relative">
                        <a href="blog-single.html" class="d-block zoom"><img src="assets/images/g6.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info">
                            <h6><a href="#category" class="category d-block">03</a></h6>

                            <h4 class="gdnhy-1"><a href="#">Development Strategies</a>
                                <a class="w3item-link" href="#">
                                    <i class="fas fa-arrow-right ms-lg-4"></i>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//bottom-3-grids-->
    
    <!--/home-page-video-popup-->
    <section class="w3l-video-sec" id="video" style="display: none;">
        <div class="container">
            <div class="w3l-index5 py-5" id="video">
                <div class="history-info align-self text-center py-5 my-lg-5">
                    <div class="position-relative py-5 my-lg-5">
                        <a href="#small-dialog1" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/124801644" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home-page-video-popup-->
    <!--/Gallery-Section-->
    <section class="w3l-gallery" id="gallery" style="display: none;">
        <div class="destionation-innf py-5">
            <div class="container py-lg-5 py-md-4 py-2 HomePageGallery">
                <div class="title-content text-center">
                    <h6 class="title-subw3hny text-center">Gallery</h6>
                    <h3 class="title-w3l mb-5 text-center">Latest Projects</h3>
                </div>
                <!--/grids-grids-->
                <ul class="gallery_agile">
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <a href="assets/images/g1.jpg">
                                <img src="assets/images/g1.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 1</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <a href="assets/images/g2.jpg">
                                <img src="assets/images/g2.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 2</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <a href="assets/images/g3.jpg">
                                <img src="assets/images/g3.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 3</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <a href="assets/images/g4.jpg">
                                <img src="assets/images/g4.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 4</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <a href="assets/images/g5.jpg">
                                <img src="assets/images/g5.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 5</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <a href="assets/images/g6.jpg">
                                <img src="assets/images/g6.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 6</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <a href="assets/images/g7.jpg">
                                <img src="assets/images/g7.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 7</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <a href="assets/images/g8.jpg">
                                <img src="assets/images/g8.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 8</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <a href="assets/images/g2.jpg">
                                <img src="assets/images/g2.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="portfolio-info">
                                    <h4>Gallery 9</h4>
                                    <i class="fas fa-plus details-link"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
                <!--//grids-grids-->
            </div>
        </div>
    </section>
    <!--//Gallery-Section-->
	<div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->
         
    </div>
    <!--/w3l-blog-->
    <section class="w3l-blog">
        <div class="bloghome py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="w3title-header text-center">
                    <h6 class="title-subw3hny">Success Stories</h6>
                    <h3 class="title-w3l mb-5">
                        How They Succeded
                    </h3>
                </div>
                <div class="row w3l-blogpost-content">
                    <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/team1.jpg" alt="blog-img">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="#blog-single" class="blog-desc blog-desc-c name">
                                    Roberto Kiyosaki
                                </a>
                                <div class="job">
                                    Real Estate Multi-Millionaire
                                </div>
                                <hr>
                                <div class="quote">
                                    "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula."
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="auhor align-items-center">
                                    <button class="btn btn-primary">Learn More <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/team2.jpg" alt="blog-img">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="#blog-single" class="blog-desc blog-desc-c name">
                                    George .B. Washington
                                </a>
                                <div class="job">
                                    Real Estate Consultant
                                </div>
                                <hr>
                                <div class="quote">
                                    "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula."
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="auhor align-items-center">
                                    <button class="btn btn-primary">Learn More <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/team3.jpg" alt="blog-img">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="#blog-single" class="blog-desc blog-desc-c name">
                                    Elon Musk
                                </a>
                                <div class="job">
                                    Tech Entrepreneur
                                </div>
                                <hr>
                                <div class="quote">
                                    "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula."
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="auhor align-items-center">
                                    <button class="btn btn-primary">Learn More <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/team4.jpg" alt="blog-img">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="#blog-single" class="blog-desc blog-desc-c name">
                                    Pastor .B. Abiodun
                                </a>
                                <div class="job">
                                    Multi-Millionaire
                                </div>
                                <hr>
                                <div class="quote">
                                    "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula."
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="auhor align-items-center">
                                    <button class="btn btn-primary">Learn More <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/g5.jpg" alt="blog-img">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                    <p>News</p>
                                </div>
                                <a href="#blog-single" class="blog-desc">
                                    Targeted Marketing for Business School Students</a>
                            </div>
                            <div class="card-footer">
                                <div class="author align-items-center">
                                    <a href="#author" class="post-author">
                                        <img src="assets/images/team2.jpg" alt="" class="img-fluid rounded-circle">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <span class="meta-value">by</span><a href="#author"> David Marks</a>
                                        </li>
                                    </ul>
                                    <div class="date">
                                        <p>25 July, 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 item mt-lg-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/g4.jpg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                    <p>News</p>
                                </div>
                                <a href="#blog-single" class="blog-desc">
                                    What You Must Know Making Investments Today</a>
                            </div>
                            <div class="card-footer">
                                <div class="author align-items-center">
                                    <a href="#author" class="post-author">
                                        <img src="assets/images/team3.jpg" alt="" class="img-fluid rounded-circle">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <span class="meta-value">by</span><a href="#author"> David Nelson</a>
                                        </li>
                                    </ul>
                                    <div class="date">
                                        <p>28 July, 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-blog-->
	<div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->
         
    </div>
    <!-- testimonials section -->
    <section class="w3l-clients w3l-test py-5" id="testimonials">
        <div class="container py-lg-5 py-md-4 pt-2 pb-5">
            <div class="row w3test-grids p-5">
                <div class="col-lg-4 testimonials-con-left-info py-sm-5 pt-0 py-3">
                    <div class="title-content text-left p-xl-3">
                        <h6 class="title-subw3hny">Reviews</h6>
                        <h3 class="title-w3l two">What Our Clients Say</h3>
                        <p class="test-p mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                            ultrices in ligula. Semper at tempufddfel.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 testimonials-con-right mt-lg-0 mt-3 p-xl-3 pb-4">
                    <div id="owl-demo2" class="owl-carousel owl-theme py-sm-5 pt-0 py-3">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">

                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team1.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>Johnson william</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>Alexander sakura</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>John wilson</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team4.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>Julia sakura</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>John wilson</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>Julia sakura</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w3company-logos text-center mt-5 pt-md-4 pt-3" style="display: none;">
                <div class="row logos">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 pl-lg-0">
                        <img src="assets/images/logo1.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 pl-lg-0">
                        <img src="assets/images/logo2.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-sm-0 mt-4 pl-lg-0">
                        <img src="assets/images/logo3.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-md-0 mt-4 pl-lg-0">
                        <img src="assets/images/logo4.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-lg-0 mt-4 pl-lg-0">
                        <img src="assets/images/logo5.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-lg-0 mt-4 pl-lg-0">
                        <img src="assets/images/logo1.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials section -->
    <?php include('layout/sign-up-as-a-trainer.layout.php'); ?>
    <!--/w3l-footer-29-main-->
    <?php include('layout/footer.layout.php'); ?>
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!--light-box-files -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/jquery.chocolat.js"></script>
    <script type="text/javascript ">
        $(function() {
            $('.w3_agile_portfolio_grid a').Chocolat();
        });

    </script>
    <!-- /js for portfolio lightbox -->
    <!-- owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    667: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })

    </script>
    <!-- //script -->
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 2,
                        nav: false
                    }
                }
            })
        })

    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- video popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>
    <!-- //video popup -->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>
