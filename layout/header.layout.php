<!--<div id='mask-pre-load'>-->
<!--    <div id="pre-load"></div>-->
<!--</div>-->

<!--<script>-->
<!--    $(window).on('load', function () {-->
<!--        $('#mask-pre-load').hide();-->
<!--    }) -->
<!--</script>-->
<!--<style>-->
<!--body, html {-->
<!--  height: 100% !important;-->
<!--}-->
<!--#mask-pre-load{-->
<!--    background-color: white !important;-->
<!--    width: 100%  !important;-->
<!--    height: 100%  !important;-->
<!--    z-index:999999 !important;-->
<!--    display: flex !important;-->
<!--    justify-content: center !important;-->
<!--    align-items: center !important;-->
<!--}-->
<!--#pre-load{-->
    <!--border: 16px solid #f3f3f3; /* Light grey */-->
<!--    margin: -75px 0 0 -75px;-->
    <!--border-top: 16px solid var(--primary-color); /* Blue */-->
<!--    border-radius: 50%;-->
<!--    width: 100px;-->
<!--    height: 100px;-->
<!--    animation: spinLoader 2s linear infinite;-->
<!--}-->
<!--@keyframes spinLoader {-->
<!--    0% { transform: rotate(0deg); }-->
<!--    100% { transform: rotate(360deg); }-->
<!--}-->
<!--</style>-->
<header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="/">
                        <span class="w3yellow">Work</span>Core
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        
                        <li class="nav-item">
                            <a <?php if($recent_page == 'Home'){echo 'class="nav-link active" aria-current="page"';}else{echo 'class="nav-link"';} ?> href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if($recent_page == 'Courses'){echo 'class="nav-link active" aria-current="page"';}else{echo 'class="nav-link"';} ?> href="/courses">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if($recent_page == 'Trainers'){echo 'class="nav-link active" aria-current="page"';}else{echo 'class="nav-link"';} ?> href="/trainers">Trainers</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if($recent_page == 'Bookings'){echo 'class="nav-link active" aria-current="page"';}else{echo 'class="nav-link"';} ?> href="/bookings">Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a  <?php if($recent_page == 'Opportunities'){echo 'class="nav-link active" aria-current="page"';}else{echo 'class="nav-link"';} ?> href="/opportunities">Opportunities</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if($recent_page == 'About'){echo 'class="nav-link active" aria-current="page"';}else{echo 'class="nav-link"';} ?> href="/about">About Us</a>
                        </li>
                        
                        <li class="nav-item dropdown" style='display:none;'>
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item pt-2" href="blog.php">Blog Page</a></li>
                                <li><a class="dropdown-item" href="blog-single.php">Blog Single</a></li>

                                <li><a class="dropdown-item" href="email.html">Email Page</a></li>
                                <li><a class="dropdown-item" href="elements.html">Elements</a></li>

                                <li><a class="dropdown-item" href="landing.html">Landing Page</a></li>

                                <li><a class="dropdown-item" href="error.html">Error Page</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item search-right">
                            <a href="#search" class="btn search-btn" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                    <form action="#" method="GET" class="search-box d-flex position-relative">
                                        <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- /search popup -->
                        </li>
                        
                    </ul>
                    <!--/search-right--> 
                    <ul class="header-search me-lg-4">
                        <li class="get-btn">
                            <a href="/courses" class="btn btn-style btn-primary" title="search">Get Started <i class="fas fa-arrow-right ms-lg-4 ms-2"></i></a>
                        </li>
                    </ul>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>