<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<!-- page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>Contact Us</h2>
                    <div class="line-dec"></div>
                    <h5>Praesent volutpat nisi sed imperdiet facilisis felis turpis fermentum lectus</h5>
                    <p>
                        <a href="<?php echo home_url('/'); ?>" class="home-btn">Home</a>
                        <a href="<?php echo site_url('contact-us'); ?>" class="active-page">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page banner end -->

<!-- contact-us-body start-->
<div class="contact-us-body">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php echo do_shortcode('[contact]'); ?>

                
            </div>

            <div class="col-md-4">
                <div class="contact-details">
                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h5>Address</h5>
                            <p> <?php get_option_tree('contact_address','',true); ?></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h5>Phone</h5>
                            <p><span>office:</span> <a href="#">  <?php get_option_tree('contact_office','',true); ?></a></p>
                            <p><span>Mobile:</span> <a href="#"> + <?php get_option_tree('contact_mobile','',true); ?></a></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="content">
                            <h5>Email</h5>
                            <p>
                               <span>office:</span><a href="mailto:sales@carhouse.com">  <?php get_option_tree('contact_email','',true); ?></a>
                            </p>

                            <p>
                               <span>Mobile:</span><a href="#"> + <?php get_option_tree('contact_mobile_s','',true); ?></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="share">
                    <h2>Share</h2>
                    <ul class="footer-social-list">
                        
                        <li><a href="<?php get_option_tree('contact_facebook','',true); ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php get_option_tree('contact_twitter','',true); ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php get_option_tree('contact_linkedin','',true); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="<?php get_option_tree('contact_google','',true); ?>" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?php get_option_tree('contact_rss','',true); ?>" class="rss"><i class="fa fa-rss"></i></a>
                        </li>
                        <li><a href="<?php get_option_tree('contact_vimeo','',true); ?>" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-us-body end-->

<?php

 get_footer();

?>