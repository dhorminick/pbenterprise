<?php
    include('layout/admin.layout.php');
    $recent_page = 'Bookings';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:description" content="Book Our Competent Trainers And Content Experts." />
    <meta property="og:image" content="<?php echo $pageUrl; ?>/assets/images/image.png" />
    <title>Bookings | PB Creative Enterprise</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/css/style-liberty.css">
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
                            Bookings </h2>
                        <p class="inner-page-para mt-2">
                            Book Our Competent Trainers And Content Experts.
                        </p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="/">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Bookings</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    
    <!--/features-section -->
    <section class="w3l-features py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2" style="display: none;">
            <div class="title-content text-center mb-md-5 mb-4">
                <h6 class="title-subw3hny mb-1">Who We Are</h6>
                <h3 class="title-w3l mb-5">We are entrepreneurs, marketers
                    and business experts</h3>
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
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-5 stats_info-images pe-lg-5">
                    <div class="stats_info-images-right row">
                        <div class="mid-slider-content">
                            <img src="assets/images/ab1.jpg" class="img-fluid radius-image" style='width:100% !important;max-height:420px !important;object-fit: cover !important;' alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 title-content text-left ps-lg-5 mt-lg-0 mt-5">
                    <h6 class="title-subw3hny mb-1">Bookings</h6>
                    <h3 class="title-w3l mb-3">Do You...</h3>
                    <ul class="icon-list-items mt-3">
                        <li class="icon-list-item">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Need a speaker for an entrepreneurship programme?
                        </li>
                        <li class="icon-list-item mt-2">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Need a writer for your freelance work?
                        </li>
                        <li class="icon-list-item mt-2">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Need a proofreader and editor for your content?
                        </li>
                        <li class="icon-list-item mt-2">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Need a video to text transcriber for your video contents?
                        </li>
                        <li class="icon-list-item mt-2">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Need graphic designers or video editors?
                        </li>
                        <li class="icon-list-item mt-2">
                            <i aria-hidden="true" class="fas fa-check"></i>
                            Need web content and designers?
                        </li>
                    </ul>
                    <p class="mb-3 mt-3">
                        Book our competent trainers and content experts by contacting us with the link below.
                    </p>
                    <a target='_blank' href='https://wa.me/<?php echo $pb_whatsapp_no;?>' class="btn btn-primary btn-style">Book Us <i class="fa fa-arrow-right"></i></a>
                </div>
                <style>
                    .btn-contact-us{
                        padding-left: 10px !important;
                        padding-right: 10px !important;
                    }
                </style>
                <!--/grids -->
            </div>
            <!--/grids -->
        </div>
    </section>
    <!--//features section -->
    
    <!--/w3l-footer-29-main-->
    <?php include('layout/footer.layout.php'); ?>
    <!-- Template JavaScript -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/theme-change.js"></script>
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
    <script src="/assets/js/bootstrap.min.js"></script>


</body>

</html>
