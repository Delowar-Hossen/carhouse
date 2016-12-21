<?php
    get_header();

?>

<!-- page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>Motor Listing</h2>
                    <div class="line-dec"></div>
                    <h5>Praesent volutpat nisi sed imperdiet facilisis felis turpis fermentum lectus</h5>
                    <p>
                        <a href="<?php echo home_url('/'); ?>" class="home-btn">Home</a>
                        <a href="<?php echo site_url('recent-cars'); ?>" class="active-page">Recent Cars</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page banner end -->

<!-- car-list start-->
<div class="car-list content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <div class="option-bar">
                   <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="section-heading padding-0">
                               <i class="fa fa-car"></i>
                               <h2>recent cars</h2>
                               <div class="border"></div>
                               <h4>Check our all motors</h4>
                           </div>
                       </div>
                   </div>
               </div>
               <?php
                     global $data;
                    $datas = get_posts([
                                    'posts_per_page'    => '8',
                                    'post_type'         => 'products',
                                    'post_status'       => 'publish',
                                    'order'             => 'DESC'
                            ]);

                foreach($datas as $data): setup_postdata($data);
                $title      = get_the_title($data->ID);
                $content    = get_the_content($data->ID);
                $images     = get_the_post_thumbnail($data->ID,'team','img-responsive list-car-pic');
                
                $price      = get_post_meta($data->ID, 'carprice', true);
                $miles      = get_post_meta($data->ID, 'miles', true);
                $color      = get_post_meta($data->ID, 'carcolor', true);
                $body_style = get_post_meta($data->ID, 'body_style', true);
                $engine     = get_post_meta($data->ID, 'engine', true);
                $transmission = get_post_meta($data->ID, 'transmission', true);
                $passengers     = get_post_meta($data->ID, 'passengers', true);

                ?>
                
                <div class="car-box">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-xs-12 car-pic-m">
                            <?php echo $images; ?>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-xs-12 car-box-body">
                            <div class="header b-items-cars-one-info-header  s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html"><?php echo $title; ?></a>
                                    <span>$<?php echo $price; ?></span>
                                </h3>
                            </div>
                            <div class="line-border"></div>
                            <?php read_more(15); ?>
                            <div class="car-box-body-inner">
                                <div class="col-md-5 col-sm-5 col-xs-12 col-pad-0 clearfix">
                                <?php if($body_style != ''){ ?>
                                    <p><span>Body Style</span> <?php echo $body_style; ?>
                                    </p>
                                <?php } ?>
                                <?php if($miles != ''){ ?>
                                    <p><span>Milengge</span><?php echo $miles; ?></p>
                                <?php } ?>
                                <?php if($transmission != ''){ ?>
                                    <p><span>Transmissione</span><?php echo $transmission; ?></p>
                                <?php } ?>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12 col-pad-0 clearfix">
                                <?php if($engine != ''){ ?>
                                    <p><span>Engine:</span> <?php echo $engine; ?></p>
                                <?php } ?>
                                <?php if($color != ''){ ?>
                                    <p><span>Color:</span><?php echo $color; ?></p>
                                <?php } ?>
                                <?php if($passengers != ''){ ?>
                                    <p><span>Specs</span><?php echo $passengers; ?>-Passenger
                                    </p>
                                <?php } ?>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12 col-pad-0 clearfix">
                                    <div class="ster-icon">
                                        <i class="fa fa-star orange-color"></i>
                                        <i class="fa fa-star orange-color"></i>
                                        <i class="fa fa-star orange-color"></i>
                                        <i class="fa fa-star orange-color"></i>
                                        <i class="fa fa-star-o orange-color"></i>
                                    </div>
                                    <div class="details-btn">
                                        <a href="<?php echo get_the_permalink($data->ID); ?>">Details</a>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php endforeach; ?>

                <nav aria-label="Page navigation">
                    <?php wpbeginner_numeric_posts_nav(); ?>
                    <!-- <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul> -->
                </nav> 
            </div>

            <div class="col-lg-4 col-md-3 col-xs-12">
                <?php include('sidebar-right.php'); ?>

                <div class="thumbnail car-box">
                <?php
                     global $data;
                    $datas = get_posts([
                                    'posts_per_page'    => '1',
                                    'post_type'         => 'products',
                                    'post_status'       => 'publish',
                                    'order'             => 'DESC'
                            ]);

                foreach($datas as $data): setup_postdata($data);
                $title      = get_the_title($data->ID);
                $content    = get_the_content($data->ID);
                $images     = get_the_post_thumbnail($data->ID,'team','img-responsive');
                $type       = get_post_meta($data->ID,'cartype',true);
                $comments   = get_post_meta($data->ID,'comments',true);
                $price      = get_post_meta($data->ID, 'carprice', true);
                $year       = get_post_meta($data->ID, 'year', true);
                $condi      = get_post_meta($data->ID, 'condition', true);
                $brands     = get_the_terms( $data->ID, 'brands' );
                $miles      = get_post_meta($data->ID, 'miles', true);
                $vimeo      = get_post_meta($data->ID, 'vimeo', true);

                ?>

                    <?php if($type != ''){ ?>
                    <a href="#" class="sale">
                        <span><?php echo $type; ?></span>
                    </a>
                    <?php } ?>
                    <img src="<?php echo get_template_directory_uri();  ?>/img/Audi-q7-2017.jpg" alt="Audi-q7-2017">
                    <div class="caption car-content">
                        <div class="header b-items-cars-one-info-header s-lineDownLeft">
                            <h3>
                                <a href="car_details.html"><?php echo $title; ?></a>
                                <span>$<?php echo $price; ?></span>
                            </h3>
                        </div>
                        <?php read_more(15); ?>
                        <div class="car-tags">
                            <ul>
                                <li><?php echo $year; ?></li>
                                <?php foreach($brands as $brand) { ?>
                                <li><?php echo $brand->name; ?></li>
                                <?php } ?>
                                <li><?php echo $condi; ?></li>
                                <li><?php echo $miles; ?>m</li>
                            </ul>
                        </div>
                        <div class="ster-fa">
                            <i class="fa fa-star orange-color"></i>
                            <i class="fa fa-star orange-color"></i>
                            <i class="fa fa-star orange-color"></i>
                            <i class="fa fa-star orange-color"></i>
                            <i class="fa fa-star-o orange-color"></i>
                        </div>
                        <div class="details-button">
                            <a href="<?php echo get_the_permalink($data->ID); ?>">Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
<!-- car-list end-->

<?php
    get_footer();
?>