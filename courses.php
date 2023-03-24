<?php
    $recent_page = 'Courses';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Courses | PB Creative Enterprise</title>
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
                        PB Creative Enterprise Courses
                        </h2>
                        <p class="inner-page-para mt-2">
                            View Our Life Changing Courses
                        </p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="/">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Courses</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    
    <!--/w3l-blog-->
    <section class="w3l-blog">
        <div class="bloghome py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="w3title-header text-center">
                    <h6 class="title-subw3hny">Paid Courses</h6>
                    <h3 class="title-w3l mb-5">
                        Latest Courses
                    </h3>
                </div>
                <div class="row w3l-blogpost-content">
                    <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class='cover-courses'>
                                <div class="main-courses">
                                    <center>
                                    <div class="arrange-courses">
                                    <h3>PB Creative Enterprise Trainers</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et faucibus enim. Integer ultrices nisl in tellus mollis, sed pretium neque facilisis. Suspendisse euismod mollis neque eu</p>
                                    </div>
                                    <p class="price-courses"><strong>$47 (N28,000)</strong></p>
                                    <button class="btn btn-primary button-courses">Purchase Course <i class="fa fa-arrow-right"></i></button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class='cover-courses'>
                                <div class="main-courses">
                                    <center>
                                    <div class="arrange-courses">
                                    <h3>PB Creative Enterprise Trainers</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et faucibus enim. Integer ultrices nisl in tellus mollis, sed pretium neque facilisis. Suspendisse euismod mollis neque eu</p>
                                    </div>
                                    <p class="price-courses"><strong>$47 (N28,000)</strong></p>
                                    <button class="btn btn-primary button-courses">Purchase Course <i class="fa fa-arrow-right"></i></button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class='cover-courses'>
                                <div class="main-courses">
                                    <center>
                                    <div class="arrange-courses">
                                    <h3>PB Creative Enterprise Trainers</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et faucibus enim. Integer ultrices nisl in tellus mollis, sed pretium neque facilisis. Suspendisse euismod mollis neque eu</p>
                                    </div>
                                    <p class="price-courses"><strong>$47 (N28,000)</strong></p>
                                    <button class="btn btn-primary button-courses">Purchase Course <i class="fa fa-arrow-right"></i></button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class='cover-courses'>
                                <div class="main-courses">
                                    <center>
                                    <div class="arrange-courses">
                                    <h3>PB Creative Enterprise Trainers</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et faucibus enim. Integer ultrices nisl in tellus mollis, sed pretium neque facilisis. Suspendisse euismod mollis neque eu</p>
                                    </div>
                                    <p class="price-courses"><strong>$47 (N28,000)</strong></p>
                                    <button class="btn btn-primary button-courses">Purchase Course <i class="fa fa-arrow-right"></i></button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-blog-->
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
