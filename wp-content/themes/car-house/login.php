<?php
/*
    Template Name: Sign In
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NX5VQP');</script>
    <!-- End Google Tag Manager -->
    <title>Car House - Car Listing Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-bg">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX5VQP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- login-body start-->
<div class="login-page-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="form-content-box">
                    <div class="logo-the carhouse  text-center">
                        <a href="index.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <h4>Please login to your account</h4>

                    <form method="post" class="login">
                        <p class="form-row form-row-wide">
                            <label for="username">
                                Username or email address*
                            </label>
                            <input type="text" class="input-text" name="username" id="username" placeholder="Email Address">
                        </p>

                        <p class="form-row form-row-wide">
                            <label for="username">
                                Password *
                            </label>
                            <input type="password" class="input-text" name="password" id="password" placeholder="password">
                        </p>

                        <div class="btn-s">
                            <a href="index.html" class="btn btn-login">login</a>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle ">
                            <input id="checkbox11" type="checkbox">
                            <label for="checkbox11" class="remember-me">
                                <span>remember me</span>
                            </label>
                                <span class="pull-right l-y-p">
                                    <a href="<?php echo site_url('forget-password'); ?>">Lost your password?</a>
                                </span>
                        </div>
                        <p class="lost-password">
                            Don't have account <a href="<?php echo site_url('sign-up'); ?>">create an account</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login-body end-->
</body>
</html>