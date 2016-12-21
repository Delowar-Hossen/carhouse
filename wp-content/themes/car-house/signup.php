/*
    Template Name: Sign Up
*/
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
<!-- login-page-body start-->
<div class="login-page-body">
	<div class="container">
		<div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-content-box">
                    <div class="logo-the carhouse  text-center">
                        <a href="<?php home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <h4>Please create an account</h4>
                    <form action="index.html" method="post" class="login">
                        <p class="form-row form-row-wide">
                            <input type="text" class="input-text" name="first_name" placeholder="First Name">
                        </p>
                        <p class="form-row form-row-wide">
                            <input type="text" class="input-text" name="last_name" placeholder="Last Name">
                        </p>
                        <p class="form-row form-row-wide">
                            <input type="email" class="input-text" name="your_name" placeholder="Email Address">
                        </p>
                        <p class="form-row form-row-wide">
                            <input type="password" class="input-text" name="password" placeholder="Password">
                        </p>
                        <p class="form-row form-row-wide">
                            <input type="password" class="input-text" name="password" placeholder="Confirm Password">
                        </p>

                        <div class="btn-s">
                            <a href="index.html" class="btn btn-login">login</a>
                        </div>
                        <p class="lost-password">
                            Already have an account? <a href="<?php echo site_url('login'); ?>">click here to login</a>
                        </p>
                    </form>
                </div>
            </div>      
        </div>
	</div>
</div>
<!-- login-page-body end-->
</body>
</html>