<?php
    $recent_page = 'Upload';
    include('layout/db.layout.php');
    $messages = [];
    
    if(isset($_POST['upload-post'])){

        $category = trim(htmlentities($_POST['category']));

        #get category details and abort if category error
        #cat = category
        $category = ucwords($category);
        $CopyUrl = "SELECT * FROM posts_categories WHERE category_link = '$category' LIMIT 1";
        $CopyUrlResult = $con->query($CopyUrl);
        if ($CopyUrlResult -> num_rows > 0) { 
            $cat_row = mysqli_fetch_array($CopyUrlResult);
            $category_name = $cat_row["category"];
            $category_id = $cat_row["id"];
            $category_link = $cat_row["category_link"];
            $category_post = $cat_row["category_post"];
        }else{
            echo 'Category Error';
            exit();
        }

        #Get Main Image FileName and Extension
        $mainImage = $_FILES['file1']['name'];
        
        // Upload file
        if(move_uploaded_file($_FILES['file1']['tmp_name'],'assets/images/'.$mainImage)){
            array_push($messages, "Main Image Uploaded Successfully...");
        }else{
            echo 'Main Image Error...';
            exit();
        }

        #Get Meta Image FileName and Extension
        $metaImage = $_FILES['file2']['name'];

        // Upload file
        
        if(move_uploaded_file($_FILES['file2']['tmp_name'],'assets/images/'.$metaImage)){
            array_push($messages, "Meta Image Uploaded Successfully...");
        }else{
            echo 'Meta Image Error...';
            exit();
        }
        $header = trim(htmlentities($_POST['header']));
        $post_id = crc32($header).uniqid();
        

        $desc = trim(htmlentities($_POST['description']));
        $post_message = $_POST['post'];
        $uploader = 'PB'; 
        $upload_month = ucfirst(date("F"));
        $upload_year = date("Y");
        $datePosted = ucwords(date("F dS, Y"));
        $comment = [];
        $comment = serialize($comment);

        $url_month = date("m");
        $url_day = date("d");
        $post_url = strtolower(trim(htmlentities($_POST['url'])));
        
        $countsDir = 'counts';
        if(!is_dir($countsDir)){
            mkdir($countsDir);
        }
        $countFile = fopen("counts/$post_url.txt", "w") or die("Unable to open file!");
        $countNo = '1000';
        fwrite($countFile, $countNo) or die("Unable to write file!");
        if ($countFile){
            array_push($messages, "Visitors Count Page Created Successfully...");
        }else{
            echo "Visitors Count Page Error.";
            exit();
        }

        fclose($countFile);

        $postsDir = 'category';
        if(!is_dir($postsDir)){
            mkdir($postsDir);
        }

        $catDir = $postsDir.'/'.$category_link;
        if(!is_dir($catDir)){
            mkdir($catDir);
        }

        $myfile = fopen("$catDir/$post_url.php", "w") or die("Unable to open file!");
        $txt = '
<?php 
    include("../../layout/db.layout.php");
    $postId = "'.$post_id.'";
?>
<?php include("../../layout/blog.layout.php"); ?>
        ';
        
        if(fwrite($myfile, $txt)){
            array_push($messages, "Post Page Created Successfully");
        }else{
            echo "Post Page Error" . $con->error;
            exit();
        }
                    
        fclose($myfile);

        #insert values to db
        $sql = "INSERT INTO posts (post_id, header, description, url, main_image, meta_image, category, uploader, upload_date, upload_month, upload_year, url_month, url_day, message, comments)
        VALUES ('$post_id', '$header', '$desc', '$post_url', '$mainImage', '$metaImage', '$category_name', '$uploader', '$datePosted', '$upload_month', '$upload_year', '$url_month', '$url_day', '$post_message', '$comment')";

        if ($con->query($sql) === TRUE) {
            array_push($messages, "Post Uploaded Successfully");
        } else {
            echo "Post Upload Error: " . $sql . "<br>" . $con->error;
            exit();
        }

        #update category db
        $cat_url = $upload_year.'/'.$url_month.'/'.$post_url;
        $category_post = unserialize($category_post);
        $category_array = array(array(
            'id' => $post_id, 
            'header' => $header, 
            'url' => $cat_url,
        ));

        $new_category_post = array_merge($category_post, $category_array);
        $new_category_post = serialize($new_category_post);

        $updateCategories = "UPDATE posts_categories SET category_post = '$new_category_post' WHERE category = '$category_name' AND id = '$category_id'";
        $updateCategoriesResult = $con->query($updateCategories);
        if ($updateCategoriesResult) {
            array_push($messages, "Categories Updated Succesfully.");
        }else{
            array_push($messages, "Category Error.");
        }

        header('Location: upload?url='.$post_id);
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Upload Free Course | PB Creative Enterprise</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <meta name="robots" content="noindex">
    <!-- <link href="summernote/summernote-bs4.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
                        
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Upload Post</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <div class="container" style="margin-top: 10px;margin-bottom:-10px !important;">
    <?php if (count($messages) > 0) : ?>
        <div class="alert-div">
            <?php foreach ($messages as $error) : ?>
            <div class="alert alert-primary alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert"><span>×</span></button>
                    <?php echo $error ?>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <span id="toastr-1"></span><span id="toastr-2"></span><span id="toastr-3"></span><span id="toastr-4"></span>
    </div>
    <?php 
        if (isset($_GET['url'])) {
            $get_url = trim(htmlentities($_GET['url']));

            $CopyUrl = "SELECT * FROM posts WHERE post_id = '$get_url' LIMIT 1";
            $CopyUrlResult = $con->query($CopyUrl);
            if ($CopyUrlResult -> num_rows > 0) { 
                $url_row = mysqli_fetch_array($CopyUrlResult);
                $url_category = $url_row["category"];

                $CopyUrl = "SELECT * FROM posts_categories WHERE category = '$url_category' LIMIT 1";
                $CopyUrlResult = $con->query($CopyUrl);
                if ($CopyUrlResult -> num_rows > 0) { 
                    $cat_row = mysqli_fetch_array($CopyUrlResult);
                    $url_category_link = $cat_row["category_link"];
                }

                $url_url = $url_row["url"]; 
                
                $sum_url = $url_year.'/'.$url_month.'/'.$url_day.'/'.$url_url;

                $u_protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                $u_pageUrl = $u_protocol . $_SERVER['HTTP_HOST'] .'/p/'. $sum_url;
            }
    ?>
    <section class="bootstrap-components py-5" id="work">
        <div class="container">
            <label for="main-Image" style="margin-bottom: 10px;font-weight:bolder;">Copy Post Link:</label>
            <div style="display: flex;">
                <input type="text" class="form-control" id="text-url" style="width: 90% !important;margin-right: 10px;" value="<?php echo $u_pageUrl;?>"/>
                <button type='button' class="btn btn-primary" id="copy">Copy <i class="fa fa-copy"></i></button>
            </div>
        </div>
    </section>     
    <?php }else{ ?>
    
    <!--//Elements-->
    <section class="bootstrap-components py-5" id="work">
        <div class="container">
        <form action="" id='uploadForm' method="POST" enctype='multipart/form-data'>
            <div class="form-group row">
                <div class="col-lg-3">
                    <label for="main-Image">Main Image:</label>
                    <input type="file" class="form-control" name="file1" placeholder="Main Image" multiple>
                </div>
                <div class="col-lg-3">
                    <label for="main-Image">Meta Image:</label>
                    <input type="file" class="form-control" name="file2" placeholder="Main Image" multiple>
                </div>
                <div class="col-lg-6">
                    <label for="main-Image">Post Category:</label>
                    <select name="category" class="form-select">
                        <?php
                            $SelectCategory = "SELECT * FROM posts_categories";
                            $SelectCategoryResult = $con->query($SelectCategory);
                            if ($SelectCategoryResult -> num_rows > 0) { 
                                while($select_category_row = mysqli_fetch_array($SelectCategoryResult)){;
                                    $select_category = $select_category_row["category"];
                                    $select_category_link = $select_category_row["category_link"];
                        ?>        
                        <option value="<?php echo $select_category_link; ?>" <?php if($select_category == 'Business'){echo 'selected';} ?>><?php echo $select_category; ?></option>
                        <?php }} ?>
                    </select>
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-lg-6">
                    <label for="heading">Post Heading:</label>
                    <input type="text" name="header" class="form-control" placeholder="eg. Post Main Heading..." required>
                </div>
                <div class="col-lg-6">
                    <label for="heading">Post Url:</label>
                    <input type="text" name="url" class="form-control" placeholder="eg. post-main-heading-in-lowercase-letters" required>
                </div>
            </div><br>
                        
            <label for="post">Short Description:</label>
            <textarea name="description" class="form-control" placeholder='Short Description Of Post...' style="width:100%;padding:10px;height:100px;" required></textarea><br>
                        
            <label for="post">Post:</label>
            <textarea name="post" class="summernote"></textarea><br>
            <button type="submit" class="btn btn-primary" name="upload-post" style="width: 100%;">Upload Post</button>
        </form>
        </div>
    </section>
    <!--//Elements-->
	<?php }?>
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

        $("#copy").on("click", function() {
            /* Get the text field */
            var copyText = document.getElementById("text-url");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /*For mobile devices*/

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            // alert("Copied the text: " + copyText.value);
            alert('Copied!');
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
    <!-- <script src="summernote/summernote-bs4.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
            });
        });
    </script>


</body>

</html>
