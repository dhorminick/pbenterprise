<?php
    include('layout/admin.layout.php');
    $recent_page = 'About';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us | PB Creative Enterprise</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!--/Header-->
    <?php include('layout/header.layout.php'); ?>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            About Us </h2>
                        <p class="inner-page-para mt-2">
                            <!--The Unique Content For Your Brands Content Development And Your Personal Re-Development.-->
                            The Unique Solution For Your Brands Content Development And Your Personal Redevelopment.
                        </p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="/">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> About Us</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->

    <!--/features-section -->
    <section class="w3l-features py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-md-5 mb-4" style='max-width: 1500px;'>
                <h6 class="title-subw3hny mb-1"style="font-size: 23px !important;margin-bottom:10px !important;color: var(--primary-color) !important;">About Us</h6>
                <h6 class="title-w3l mb-5" style="font-size: 19px !important;line-height: 26px !important;text-transform: none !important;"><?php echo $about_us; ?></h6>
            </div>
            <hr>
            <div class="main-cont-wthree-2 align-items-center text-center pt-lg-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 mt-md-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-toolbox"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Mission Statement</a></h4>
                            <p class="text-para"><?php echo $mission_stmt; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-lg-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-podcast"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Vision Statement</a></h4>
                            <p class="text-para"><?php echo $vision_stmt; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features section -->

    <!--/Counts-Section-->
    <section id="counts" class="w3lcounts">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-users"></i>
                        <p class="counter">100+</p>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="far fa fa-book"></i>
                        <p class="counter">100+</p>
                        <p>Courses</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-headset"></i>
                        <p class="counter">1660</p>
                        <p>Hours Of Support</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-user-tie"></i>
                        <p class="counter">50+</p>
                        <p>Competent Trainers</p>
                    </div>
                </div>

            </div>

        </div>
    </section><br>
    <!--//Counts-Section-->
    
    <!--/w3l-project-->
    <?php include('layout/sign-up-as-a-trainer.layout.php'); ?>
    <!--//w3l-project-->
    
    <!--/w3l-footer-29-main-->
    <?php include('layout/footer.layout.php'); ?>
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>

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
