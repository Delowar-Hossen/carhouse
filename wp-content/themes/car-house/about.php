<?php
/*
 Template Name: About Page
 */
 get_header();
 ?>

<!-- page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>About Car House</h2>
                    <div class="line-dec"></div>
                    <h5>Praesent volutpat nisi sed imperdiet facilisis felis turpis fermentum lectus</h5>
                    <p>
                        <a href="<?php echo home_url('/'); ?>" class="home-btn">Home</a>
                        <a href="<?php echo site_url('about-us'); ?>" class="active-page">About us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page banner end -->

<!-- about-body start-->
<div class="about-body">
    <div class="page-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact_list">
                    <h2 class="title"><?php get_option_tree('welcometitle','',true); ?></h2>
                    <?php get_option_tree('welcomecontact','',true); ?>
                    <a href="<?php echo site_url('contact-us'); ?>" class="btn-contact-us">Contact us</a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="car-video-frame">
                    <!-- https://www.youtube.com/embed/21CY9RtMQkU -->
                        <iframe src="<?php get_option_tree('conyoutube','',true); ?>" ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="page-section b-more">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title"><?php get_option_tree('welcometitle2','',true); ?></h2>
                    <?php get_option_tree('welcomecontact2','',true); ?>
                   
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title">More Info</h2>
                    
                    <div class="panel-div">
                    <div class="panel-group" id="accordion" role="tablist">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-plus"></i><?php get_option_tree('moreinfortitle1','','true'); ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                <div class="panel-body">
                                    <?php get_option_tree('moreinforcont1','','true'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-plus"></i><?php get_option_tree('moreinfortitle2','','true'); ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                <div class="panel-body">
                                    <?php get_option_tree('moreinforcont2','','true'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingfive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    <i class="fa fa-plus"></i><?php get_option_tree('moreinfortitle3','','true'); ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                <div class="panel-body">
                                    <?php get_option_tree('moreinforcont3','','true'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                </div>
            </div>
        </div>
    </section>

    <section class="about-Team-meet">
        <div class="container">
            <div class="title text-center">Meet the Team</div>
            <div class="row mrg-t-20">
                <?php
                global $data;
                    $datas = get_posts([
                                    'posts_per_page'    => '4',
                                    'post_type'         => 'teams',
                                    'post_status'       => 'publish',
                                    'order'             => 'DESC'
                            ]);

                foreach($datas as $data): setup_postdata($data);
                $title = get_the_title($data->ID);
                $content = get_the_content($data->ID);
                $images = get_the_post_thumbnail($data->ID,'team','img-responsive');
                $designation = get_post_meta($data->ID,'designation',true);
                $facebook = get_post_meta($data->ID, 'facebook', true);
                $twitter = get_post_meta($data->ID, 'twitter', true);
                $linkedin = get_post_meta($data->ID, 'linkedin', true);
                $google = get_post_meta($data->ID, 'google', true);
                $rss = get_post_meta($data->ID, 'rss', true);
                $vimeo = get_post_meta($data->ID, 'vimeo', true);

                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail about-box">
                        <?php echo $images; ?>
                        <div class="caption about-box-body">
                            <h6><?php echo $designation; ?></h6>
                            <div class="header b-items-cars-one-info-header  s-lineDownLeft">
                                <h3>
                                    <?php echo $title; ?>
                                </h3>
                            </div>
                            <p>
                                <?php echo $content; ?>
                            </p>
                            <ul class="footer-social-list">
                            <?php if($facebook != ''){ ?>
                                <li><a href="<?php echo $facebook; ?>" class="facebook">
                                      <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($twitter != ''){ ?>
                                <li>
                                    <a href="<?php echo $twitter; ?>" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($linkedin != ''){ ?>
                                <li>
                                    <a href="<?php echo $linkedin; ?>" class="linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($google != ''){ ?>
                                <li>
                                    <a href="<?php echo $google; ?>" class="google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($rss != ''){ ?>
                                <li>
                                    <a href="<?php echo $rss; ?>" class="rss">
                                        <i class="fa fa-rss"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($vimeo != ''){ ?>
                                <li>
                                    <a href="<?php echo $vimeo; ?>" class="vimeo">
                                        <i class="fa fa-vimeo"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </section>
</div>
<!-- about-body end-->

<!-- testimonials end-->
<div class="testimonials">
    <div class="col-lg-12">
        <div id="carouse2-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                    $datas = new Wp_Query(array(
                            'post_type' => 'delears',
                            'posts_per_page' => 5,
                            'order' => 'ASC'
                        ));
                    $i = -1;
                    while($datas->have_posts()): $datas->the_post();
                    $i++;
                ?>
                <li data-target="#carouse2-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
                <?php endwhile; ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
            <?php
                $datas = new Wp_Query(array(
                        'post_type' => 'delears',
                        'posts_per_page' => 5,
                        'order' => 'ASC'
                    ));
                $i = 0;
                while($datas->have_posts()): $datas->the_post();
                $i++;
            ?>
                <div class="item <?php if($i == 1){ echo 'active';} ?>">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 testimonials-inner">
                            <ul class="star-rating orange-color">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="line-dec"></div>
                            <p>
                                <em>"</em>
                                <?php echo get_the_content(); ?>
                                <em>"</em>
                            </p>
                            <div class="author-rate">
                                <?php echo get_the_post_thumbnail('','dealer',''); ?>
                                <h4><?php the_title(); ?></h4>
                                <div class="line-dec2"></div>
                                <span>Car Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carouse2-example-generic" role="button" data-slide="prev">
              <span class="slider-mover-left" aria-hidden="true">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/left-chevron.png" alt="left-chevron">
              </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouse2-example-generic" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/right-chevron.png" alt="right-chevron">
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- testimonials end-->

<!-- Our Services start-->
<div class="serviceslist text-center">
    <div class="container">
        <div class="row">
            <?php 
                $datas = new Wp_Query(array(
                        'post_type' => 'services',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                    ));
                while($datas->have_posts()): $datas->the_post();
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="Services-box">
                    <i class="fa <?php echo get_the_excerpt(); ?>"></i>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- Our Services end-->

<?php

get_footer();
?>