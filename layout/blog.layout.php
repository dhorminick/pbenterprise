<?php 
    $recent_page = 'Blog';

    $messages = [];

    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $pageUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $domainUrl = $protocol . $_SERVER['HTTP_HOST'];

    $ReadPosts = "SELECT * FROM posts WHERE post_id = '$postId' LIMIT 1";
    $ReadPostsResult = $con->query($ReadPosts);
    if ($ReadPostsResult -> num_rows > 0) {
        $_row = mysqli_fetch_array($ReadPostsResult);

        $header = $_row['header'];
        $main_image = $_row['main_image'];
        $meta_image = $_row['meta_image'];
        $category = $_row['category'];
        $category_link = $_row['category_link'];
        $description = $_row['description'];
        $message = $_row['message'];
        $uploader = $_row['uploader'];
        $upload_month = $_row['upload_month'];
        $upload_year = $_row['upload_year'];
        $upload_date = $_row['upload_date'];
        $url = $_row['url'];
        $post_comments = $_row['comments'];

        $post_comments = unserialize($post_comments);
       
    }else{
        #header('Location: 404.php');
        echo 'Error';
        exit();
    }

    if(isset($_POST['post-comment'])){

        $name = trim(htmlentities($_POST['name']));
        $email = trim(htmlentities($_POST['email']));
        $comment = trim(htmlentities($_POST['comment']));
        $commentId = $postId.uniqid();

        $comment_replies = [];
        $comment_replies = serialize($comment_replies);

        $new_comments = array(array(
            'id' => $commentId, 
            'name' => $name, 
            'email' => $email, 
            'comment' => $comment,
            'date' => date("F dS, Y"),
            #'replies' => $comment_replies,
        ));

        $inputed_comment = array_merge($post_comments, $new_comments);
        $inputed_comment = serialize($inputed_comment);

        $updateComments = "UPDATE posts SET comments = '$inputed_comment' WHERE post_id = '$postId'";
        $updateCommentsResult = $con->query($updateComments);
        if ($updateCommentsResult) {
            array_push($messages, "Comment Uploaded Succesfully.");
        }else{
            array_push($messages, "Comment Error.");
        }
                  
    }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="<?php echo $pageUrl;?>" />
    <meta property="og:description" content="<?php echo $description;?>" />
    <meta property="og:keywords" content="<?php echo date("Y"); ?>, <?php echo $category;?>, <?php echo ucwords($header);?>" />
    <meta property="og:image" content="<?php echo $domainUrl; ?>/assets/images/image.png" />
    <meta property="twitter:image" content="<?php echo $domainUrl; ?>/assets/images/image.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="PB Creative Enterprise Courses" />
    <meta name="twitter:title" content="<?php echo ucwords($header);?> | <?php echo ucwords($category);?> | PB Creative Enterprise" />
    <meta name="twitter:description" content="<?php echo $description;?>">
    <meta name="twitter:image" content="/assets/images/image.png" />
    <meta name="twitter:site" content="@pastorbblog" />

    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <title><?php echo ucwords($header);?> | <?php echo ucwords($category);?> | PB Creative Enterprise</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../../assets/css/style-liberty.css">
    <meta name="robots" content="noindex">
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
                            <?php echo $header;?>
                        </h2>
                        <p class="inner-page-para mt-2">
                            <li><a href="/category/<?php echo $category_link;?>"><?php echo ucwords($category);?></a></li>
                        </p>
                    </div>
                    <div class="w3breadcrumb-right" style="display: none;">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="/">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> <?php echo ucwords($category);?></li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
	<div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

         
    </div>
    <!--/w3l-blog-->
    <section class="w3l-blog bloghny-page">
        <div class="blog py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-8 bloghnypage-left blog-single-post">
                        <div class="single-post-image mb-4">
                            <!-- <img src="../../assets/images/banner2.jpg" class="img-fluid w-100 radius-image" alt="<?php echo $header;?>"> -->
                            <img src="../../assets/images/<?php echo $main_image;?>" class="img-fluid w-100 radius-image" alt="blog-post-image">
                        </div>
                        <div class="blo-singl mb-3">
                            <ul class="blog-single-author-date d-sm-flex align-items-center">
                                <li>
                                    <span class="fas fa-user"></span><a href="#admin"> by <?php echo $uploader;?></a>
                                </li>
                                <li>
                                    <span class="far fa-clock"></span> <?php echo $upload_date;?>
                                </li>
                                <li>
                                    <span class="far fa-eye"></span>
                                    <?php
                                        $file = fopen("../../counts/".$url.".txt","r");
                                        //Output lines until EOF is reached
                                        while(! feof($file)) {
                                        $line = fgets($file);
                                        echo $line. "";
                                        }
                
                                        fclose($file);
                                    ?>
                                </li>
                                <li>
                                    <?php 
                                        $GetCategories = "SELECT * FROM posts WHERE post_id = '$postId' LIMIT 1";
                                        $GetCategoriesResult = $con->query($GetCategories);
                                        if ($GetCategoriesResult -> num_rows > 0) {
                                            $comment_row = mysqli_fetch_array($GetCategoriesResult);
                                        
                                            $get_comments = $comment_row['comments'];
                                        }
                                        $get_comments = unserialize($get_comments);
                                        $commentCount = count($get_comments);
                                        if ($commentCount > 1) {
                                            $s = 's';
                                        }else{
                                            $s = null;
                                        }
                                    ?>
                                    <a href="#comments" style="font-weight: normal !important;"><span class="fas fa-comments"></span> <?php echo $commentCount.' Comment'.$s;?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-post-content">
                            <h3 class="post-content-title mb-3">
                                <?php echo $header;?>
                            </h3>

                            <p class="mb-4 p-content">
                                <?php 
                                    $message = str_replace( 'font-family' , 'f', $message );
                                    echo $message;
                                ?>
                            </p>
                        </div>
                        
                        <div class="col-lg-12 blog-w3hny-right">
                            <div class="popular-tags">
                                <a href="javascript:void(0);" style="padding: 1px 5px !important;font-weight:normal !important;font-size:14px !important;">Idea</a>

                                <a href="javascript:void(0);" style="padding: 1px 5px !important;font-weight:normal !important;font-size:14px !important;">Profit</a>
                                <a href="javascript:void(0);" style="padding: 1px 5px !important;font-weight:normal !important;font-size:14px !important;">Quality</a>
                                <a href="javascript:void(0);" style="padding: 1px 5px !important;font-weight:normal !important;font-size:14px !important;">Project</a>

                                
                            </div>
                        </div><hr>

                        <ul class="share-post text-right">
                            <li>
                                <h5 class="post-content-title me-sm-4 me-2 mb-0">Share this post :</h5>
                            </li>
                            <li class="facebook">
                                <a target='_blank' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $pageUrl;?>" title="Facebook">
                                    <span class="fab fa-facebook-f" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="twitter">
                                <a target='_blank' href="https://twitter.com/home?status=<?php echo $pageUrl;?>" title="Twitter">
                                    <span class="fab fa-twitter" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="google">
                                <a href="#link" title="Google">
                                    <span class="fab fa-pinterest-p" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="whatsapp">
                                <a target='_blank' href="whatsapp://send/?text=<?php echo $pageUrl;?>" title="Google">
                                    <span class="fab fa-whatsapp" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>

                        <hr>

                        <div class="reply mt-5" id="reply">
                            <h3 class="post-content-title py-3">Leave a Comment</h3>
                            <form action="#" method="POST">
                                <div class="form-group reply">
                                    <div class="input-grids row mb-md-4 mb-3">

                                        <div class="form-group col-lg-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name*" required="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="email" name="email" class="form-control" placeholder="Email*" required="">
                                        </div>
                                    </div>
                                    <textarea class="form-control" name="comment" placeholder="Your Message" id="exampleFormControlTextarea1" rows="4"></textarea>

                                    <div class="post-submit mt-4">
                                        <button class="btn btn-primary btn-style" name="post-comment" type="submit">Post Comment <i class="fas fa-arrow-right ms-lg-4 ms-2"></i> </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <hr>

                        <div class="comments">
                            <h3 class="post-content-title"><?php echo $commentCount;?> Comment(s)</h3>
                            <?php
                                if($commentCount <= 0){
                            ?>
                            <div class="no-comment">
                                No Comment Added Yet!
                            </div>
                            <?php
                                }else{
                                foreach ($get_comments as $key => $all_comment) { 
                            ?>    
                            <div class="media mt-md-4 mt-3">
                                <div class="img-circle" style="width:50px !important;height:50px !important;">
                                    <img src="../../assets/images/user.png" class="img-fluid" alt="...">
                                </div>
                                <div class="media-body comments-grid-right">
                                    <a href="javascript:void(0);" class="name mt-0"><?php echo ucwords($all_comment['name']); ?></a>
                                    <ul class="time-rply mb-3">
                                        <li><?php echo $all_comment['date']; ?>
                                            <i>|</i>
                                        </li>
                                        <li>
                                            <a href="#reply">Reply</a>
                                        </li>
                                    </ul>
                                    <p style="font-size: 15px !important;"><?php echo $all_comment['comment']; ?></p>
                                </div>
                            </div>
                            <?php }} ?>

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
                                        <img src="../../assets/images/<?php echo $rm_image;?>" class="" style='height:70px;width:70px;object-fit:cover;' alt="<?php echo $rm_header;?>"> 
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
    
    <?php
        $counter_name = "../../counts/".$url.".txt";

        $f = fopen($counter_name,"r");
        $counterVal = fread($f, filesize($counter_name));
        fclose($f);

        $counterVal++;
        $f = fopen($counter_name, "w");
        fwrite($f, $counterVal);
        fclose($f); 
    ?>

</body>

</html>
