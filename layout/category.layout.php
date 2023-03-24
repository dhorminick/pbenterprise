<?php
    include('db.layout.php');
    $messages = [];

    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $pageUrl = $protocol . $_SERVER['HTTP_HOST'];

    $GetCategoriesDetails = "SELECT * FROM posts_categories WHERE category = '$page_category'";
    $GetCategoriesDetailsResult = $con->query($GetCategoriesDetails);
    if ($GetCategoriesDetailsResult -> num_rows > 0) {
        $s_category_row = mysqli_fetch_array($GetCategoriesDetailsResult);
        $category_link = $s_category_row['category_link'];
        $category_name = $s_category_row['category'];
        $category_description = $s_category_row['category_description'];
        $category_catchphrase = $s_category_row['category_catchphrase'];
        
        # $category_name = $category_row['category'];
    }else{
        echo 'Error'.$con->error;
        exit();
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta property="og:url" content="<?php echo $pageUrl.'/category/'.$category_link;?>" />
    <meta property="og:description" content="<?php echo $category_description;?>" />
    <meta property="og:keywords" content="<?php echo date("Y"); ?>, news, blog, politics, gossip, 
        Events, Entertainment, Lifestyle, Fashion, Beauty, Inspiration" />
    <meta property="og:image" content="<?php echo $pageUrl; ?>/assets/images/image.png" />
    <meta property="twitter:image" content="<?php echo $pageUrl; ?>/assets/images/image.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="PB Creative Enterprise Courses" />
    <meta name="twitter:title" content="<?php echo ucwords($category_name);?> Category | PB Creative Enterprise " />
    <meta name="twitter:description" content="<?php echo $category_description;?>">
    <meta name="twitter:image" content="<?php echo $pageUrl; ?>/assets/images/image.png" />
    <meta name="twitter:site" content="@pastorbblog" />

    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <title><?php echo ucwords($category_name);?> Category | PB Creative Enterprise </title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../../assets/css/style-liberty.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
</head>

<body>
    <!--/Header-->
    <?php include('header.layout.php'); ?>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            <?php echo $category_name; ?>
                        </h2>
                        <p class="inner-page-para mt-2"><?php echo $category_catchphrase; ?></p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="/">Home</a></li>
                            <li><span class="fas fa-angle-double-right mx-2"></span> <a href="/category/">Category</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> <?php echo ucwords($category_name);?></li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-blog-->
	<div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

         
        </div>
    <section class="w3l-blog bloghny-page">
        <div class="blog py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-8 bloghnypage-left">
                        <div class="row">
                            <?php 
                                if (isset($_GET['page']) && $_GET['page']!="") {
                                    $page = trim(strip_tags($_GET['page']));
                                    if (!filter_var($page, FILTER_VALIDATE_INT) === false) {
                                    
                                    } else {
                                        $page = 1;
                                    }
                                } else {
                                    $page = 1;
                                }
    
                                $total_records_per_page = 2;
                                $offset = ($page-1) * $total_records_per_page;
                                $previous_page = $page - 1;
                                $next_page = $page + 1;
                                $adjacents = "2"; 
    
                                $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `posts`");
                                $total_records = mysqli_fetch_array($result_count);
                                $total_records = $total_records['total_records'];
                                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                $second_last = $total_no_of_pages - 1; // total page minus 1

                                $AllPosts = "SELECT * FROM posts WHERE category = '$page_category' ORDER BY id DESC LIMIT $offset, $total_records_per_page";
                                $AllPostsResult = $con->query($AllPosts);
                                if ($AllPostsResult -> num_rows > 0) { 
                                    while($_row = mysqli_fetch_array($AllPostsResult)){
                                        #lp = latest post
                                        $lp_header = $_row["header"];
                                        $lp_image = $_row["main_image"];
                                        $lp_url = $_row["url"];
                                        $lp_category = $_row["category"];
                                        $lp_category_link = $_row["category_link"];
                                        $lp_uploader = $_row["uploader"];
                                        $lp_message = $_row["description"];
                                        $lp_year = $_row["upload_year"];
                                        $lp_month = $_row["url_month"];
                                        $lp_upload_date = $_row["upload_date"];
                            ?>
                            <div class="col-md-6 item mt-md-0 mt-5" style="margin-bottom: 20px !important;">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="<?php echo '/category/'.$category_link.'/'.$lp_url;?>" class="zoom d-block">
                                            <img class="card-img-bottom card-img-bottom-custom d-block" src="../../assets/images/<?php echo $lp_image; ?>" alt="<?php echo $lp_header; ?>">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details" style="padding:10px 10px !important;">
                                        <div class="arr-blog">
                                        <a href="<?php echo '/category/'.$category_link.'/'.$lp_url;?>" class="blog-desc blog-desc-custom"><?php echo $lp_header; ?></a>
                                        <p class="mt-1 p-mt-1-custom"><?php echo $lp_message; ?> </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php } ?> 
                            <hr>
                            <div class="pagination-wrapper pt-lg-3">
                                <ul class="page-pagination">
                                    <center>
                                    <h6 style="margin-bottom: 10px !important;">Page <?php echo $page." of ".$total_no_of_pages; ?></h6>
                                    <li><a class="page-numbers" <?php if($page <= 1){ echo "disabled"; } ?> <?php if($page > 1){ echo "href='?page=$previous_page'"; } ?>><span class='fa fa-angle-left'></span> Previous</a></li>
                                    <?php 

                                        if ($total_no_of_pages <= 10){       
                                            for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                                                if ($counter == $page) {
                                                    echo "<li><span aria-current='page' class='page-numbers current'>$counter</span></li>";  
                                                }else{
                                                    echo "<li><a class='page-numbers' href='?page=$counter'>$counter</a></li>";
                                                }
                                            }
                                        }
                                        elseif($total_no_of_pages > 10){
                            
                                            if($page <= 4) {         
                                                for ($counter = 1; $counter < 8; $counter++){       
                                                    if ($counter == $page) {
                                                        echo "<li><span aria-current='page' class='page-numbers current'>$counter</span></li>";  
                                                    }else{
                                                        echo "<li><a class='page-numbers' href='?page=$counter'>$counter</a></li>";
                                                    }
                                                }
                                                echo "<li><a class='page-numbers'>...</a></li>";
                                                echo "<li><a class='page-numbers' href='?page=$second_last'>$second_last</a></li>";
                                                echo "<li><a class='page-numbers' href='?page=$total_no_of_pages'>$total_no_of_pages</a>";
                                            } elseif($page > 4 && $page < $total_no_of_pages - 4) {         
                                                echo "<li><a class='page-numbers' href='?page=1'>1</a></li>";
                                                echo "<li><a class='page-numbers' href='?page=2'>2</a></li>";
                                                echo "<li><a class='page-numbers'>...</a></li>";
                                                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {         
                                                if ($counter == $page) {
                                                    echo "<li><span aria-current='page' class='page-numbers current'>$counter</span></li>";  
                                                }else{
                                                    echo "<li><a class='page-numbers' href='?page=$counter'>$counter</a></li>";
                                                }                  
                                            }
                                            echo "<li><a class='page-numbers'>...</a></li>";
                                            echo "<li><a class='page-numbers' href='?page=$second_last'>$second_last</a></li>";
                                            echo "<li><a class='page-numbers' href='?page=$total_no_of_pages'>$total_no_of_pages</a></li>";      
                                            } else {
                                                echo "<li><a class='page-numbers' href='?page=1'>1</a></li>";
                                                echo "<li><a class='page-numbers' href='?page=2'>2</a></li>";
                                                echo "<li><a class='page-numbers'>...</a></li>";

                                                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                                    if ($counter == $page) {
                                                        echo "<li><span aria-current='page' class='page-numbers current'>$counter</span></li>";  
                                                    }else{
                                                        echo "<li><a class='page-numbers' href='?page=$counter'>$counter</a></li>";
                                                    }                   
                                                }
                                            }
                                        }
                                    ?>
                                    <?php
                                        if($page >= $total_no_of_pages){
                                    ?>
                                        <li class='<?php if($page >= $total_no_of_pages){ echo 'disabled'; } ?>'>
                                            <a class='next' <?php if($page < $total_no_of_pages) { echo "href='?page=$next_page'"; } ?>>Next <span class='fa fa-angle-right'></span></a>
                                        </li>
                                    <?php } ?>
                                    <?php 
                                        if($page < $total_no_of_pages){
                                            echo "<li><a class='next' href='?page=$total_no_of_pages'>Last <span class='fa fa-angle-right'></span></a></li>";
                                        } 
                                    ?>
                                    </center>
                                </ul>
                            </div>
                            <?php }else{ ?>
                            <h4>No Free Course Uploaded Under "<?php echo ucwords($category_name);?>" Category Yet..</h4>
                            <?php } ?>
                        </div>
                    </div>
                    <!--/sidebar-->
                    <div class="col-lg-4 blog-w3hny-right ps-lg-5">
                        <aside class="sidebar">
                            <!--Blog Category Widget-->
                            <div class="sidebar-widget  mb-5">
                                <div class="sidebar-title mb-4">
                                    <center><h4>Course Categories</h4></center>
                                </div><hr>
                                <ul class="blog-cat">
                                    <?php 
                                        $GetCategories = "SELECT * FROM posts_categories";
                                        $GetCategoriesResult = $con->query($GetCategories);
                                        if ($GetCategoriesResult -> num_rows > 0) {
                                            while($category_row = mysqli_fetch_array($GetCategoriesResult)){
                                            
                                            # c is category
                                            $c_name = $category_row['category'];
                                            $c_link = $category_row['category_link'];
                                            $c_posts = $category_row['category_post'];
                                        
                                            $c_posts = unserialize($c_posts);
                                            $c_count = count($c_posts);
                                    ?>
                                    <li>
                                        <a href="<?php echo '/category/'.$c_link; ?>/index">
                                            <span class="fas fa-angle-double-right"></span> <?php echo $c_name; ?>
                                            <label><?php echo $c_count; ?></label>
                                        </a>
                                    </li>
                                    <?php }} ?>
                                </ul>
                            </div>

                            <?php 
                                $ReadMore = "SELECT * FROM posts ORDER BY id DESC LIMIT 10";
                                $ReadMoreResult = $con->query($ReadMore);
                                if ($ReadMoreResult -> num_rows > 0) { 
                            ?>
                            <!-- Popular Post Widget-->
                            <div class="sidebar-widget popular-posts mb-5">
                                <div class="sidebar-title">
                                    <center><h4>Recent Posts</h4></center>
                                </div>
                                <hr>
                                <?php
                                    while($rm_row = mysqli_fetch_array($ReadMoreResult)){
                                        #rm = read more
                                        $rm_header = $rm_row["header"];
                                        $rm_image = $rm_row["meta_image"];
                                        $rm_url = $rm_row["url"];
                                        $rm_year = $rm_row["upload_year"];
                                        $rm_month = $rm_row["url_month"];
                                        $rm_upload_date = $rm_row["upload_date"];
                                        $rm_upload_month = $rm_row["upload_month"];
                                        $url_day = $rm_row["url_day"];
                                        $url_category = $rm_row["category"];
                                        
                                        $url_category = ucwords($url_category);

                                        $UrlGetCategories = "SELECT * FROM posts_categories WHERE category = '$url_category'";
                                        $UrlGetCategoriesResult = $con->query($UrlGetCategories);
                                        if ($UrlGetCategoriesResult -> num_rows > 0) {
                                            $category_row = mysqli_fetch_array($UrlGetCategoriesResult);
                                            
                                            # c is category
                                            $url_c_link = $category_row['category_link'];
                                        }
                                ?>
                                <article class="post post-custom">
                                    <figure class="post-thumb">
                                        <img src="../../assets/images/<?php echo $rm_image;?>" style='height:70px;width:70px;object-fit:cover;' alt="<?php echo $rm_header;?>"> 
                                    </figure>
                                    <div class="text">
                                        <a href="/category/<?php echo $url_c_link."/".$rm_url;?>">
                                            <?php echo $rm_header;?>
                                        </a>
                                    </div>
                                    <div class="post-info"><?php echo ucfirst($rm_upload_date);?></div>
                                </article><hr>
                                <?php } ?> 
                            </div>
                            <?php }else{} ?>

                            <!--/Tags Widget-->
                            <div class="sidebar-widget popular-tags mb-5">
                                <div class="sidebar-title mb-4">
                                    <h4><center>Follow Us:</center></h4>
                                </div><hr>
                                <center>
                                    <a href="#url" style="background: #3a5998;color:white;"><span class="fab fa-facebook-f"></span> Facebook</a>
                                    <a href="#url" style="background: #55acee;color:white;"><span class="fab fa-twitter"></span> Twitter</a>
                                    <a href="#url" style="background: #dc4e41;color:white;"><span class="fab fa-pinterest-p"></span> Pinterest</a>
                                    <a href="#url" style="background: #2ab200;color:white;"><span class="fab fa-whatsapp"></span> Whatsapp</a>
                                </center>
                            </div>
                            <!--/Tags Widget-->
                            <!--/Tags Widget-->
                            <div class="sidebar-widget">
                                <div class="sidebar-title mb-4">
                                    <h4>Advertisement</h4>
                                </div>
                                <a href="#add">
                                    <img src="../../assets/images/g8.jpg" alt=" " class="radius-image img-fluid">
                                </a>

                            </div>
                            <!--/Tags Widget-->

                        </aside>
                    </div>
                    <!--//sidebar-->
                </div>
            </div>
        </div>
    </section>
    <!--//Blog-Section-->
	<div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->
         
        </div>
    <!--/w3l-footer-29-main-->
    <?php include('footer.layout.php'); ?>
    <!-- Template JavaScript -->
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/theme-change.js"></script>
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
    <script src="../../assets/js/bootstrap.min.js"></script>


</body>

</html>
