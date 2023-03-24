<?php
    $recent_page = 'Admin';
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $pageUrl = $protocol . $_SERVER['HTTP_HOST'];
    echo $pageUrl;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WorkCore - Business Category Bootstrap Responsive Template | 404 :: W3layouts </title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
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

        </section>
    </div>
    <!--//inner-page-->
    <!--/Error-page-->
    <section class="w3layouts-errorhny">
        <div class="w3l-error-grid py-5">
            <div class="container py-lg-4">
                <div class="error-bloc text-centerk">
                    <h1>404</h1>
                    <h2>Oops....</h2>
                    <p class="mt-4">We're sorry, but
                        something <br>went wrong.</p>

                    <a href="index.html" class="btn btn-style btn-primary mt-4"> <span class="fa fa-arrow-left me-2"></span> Back to Home</a>
                </div>

                <div>
                    <label for="main-Image" style="margin-bottom: 10px;font-weight:bolder;">Copy Post Link:</label>
                    <div style="display: flex;">
                        <input type="text" class="form-control" id="text-url" style="width: 90% !important;margin-right: 10px;" value="Learn how to copy text to the clipboard with JavaScript."/>
                        <button type='button' class="btn btn-primary" id="copy">Copy <i class="fa fa-copy"></i></button>
                    </div>

                    <script>
                        // function copyFunction() {
                        //     /* Get the text field */
                        //     var copyText = document.getElementById("text-url");

                        //     /* Select the text field */
                        //     copyText.select();
                        //     copyText.setSelectionRange(0, 99999); /*For mobile devices*/

                        //     /* Copy the text inside the text field */
                        //     document.execCommand("copy");

                        //     /* Alert the copied text */
                        //     // alert("Copied the text: " + copyText.value);
                        //     alert('Copied!');
                        // }
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
                </div>
            </div>
        </div>
    </section>
    <!--//Error-page-->
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
    <script>
                        // function copyFunction() {
                        //     /* Get the text field */
                        //     var copyText = document.getElementById("text-url");

                        //     /* Select the text field */
                        //     copyText.select();
                        //     copyText.setSelectionRange(0, 99999); /*For mobile devices*/

                        //     /* Copy the text inside the text field */
                        //     document.execCommand("copy");

                        //     /* Alert the copied text */
                        //     // alert("Copied the text: " + copyText.value);
                        //     alert('Copied!');
                        // }
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


</body>

</html>
