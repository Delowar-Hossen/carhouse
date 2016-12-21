<?php get_header(); ?>
<!--main-header end-->

<!-- banner start-->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <?php
            
            $sliders = new WP_Query([
                        //'category_name'        => $category,
                        'posts_per_page'    => '5',
                        'post_type'         => 'sliders'
                ]);
            $i = 0;
            while($sliders->have_posts()) : $sliders->the_post();
                $i++;
        ?>
            <div class="item <?php if($i == 1){ echo 'active'; } ?> item-<?php echo $i; ?>">
                <div class="container">
                    <div class="banner-slider-inner-1">
                        <h1>Sports Car</h1>
                        <h2>Best Car 2016</h2>
                        <!--<h4>Attract, Engage, & Convert<br>Qualified Vehiche Shoppers</h4>-->
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="slider-mover-left" aria-hidden="true">
             <img src="<?php echo get_template_directory_uri(); ?>/img/left-chevron.png" alt="left-chevron">
          </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/img/right-chevron.png" alt="right-chevron">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- banner End-->

<!-- recent-car start-->
<div class="recent-car content-area">
    <div class="container">
        <div class="recent-car-content">
            <div class="row margin-b-15">
                <div class="col-md-12">
                    <div class="section-heading">
                        <i class="fa fa-car"></i>
                        <h2>Recent cars</h2>
                        <div class="border"></div>
                        <h4>Check our recent motors</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                    global $data;
                    $datas = get_posts([
                                    'posts_per_page'    => '12',
                                    'post_type'         => 'products',
                                    'post_status'       => 'publish',
                                    'order'             => 'DESC'
                            ]);

                foreach($datas as $data): setup_postdata($data);
                $title = get_the_title($data->ID);
                $content = get_the_content($data->ID);
                $images = get_the_post_thumbnail($data->ID,'team','img-responsive');
                $type   = get_post_meta($data->ID,'cartype',true);
                $price  = get_post_meta($data->ID, 'carprice', true);
                $year   = get_post_meta($data->ID, 'year', true);
                $condi  = get_post_meta($data->ID, 'condition', true);
                $brands = get_the_terms( $data->ID, 'brands' );
                $miles  = get_post_meta($data->ID, 'miles', true);
                $vimeo  = get_post_meta($data->ID, 'vimeo', true);
                ?>
                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="thumbnail car-box">
                        <a href="#" class="sale">
                            <?php if($type == 'Sale'){
                                echo '<span>Sale</span>';
                            }else if($type == 'Rent'){
                                echo '<span>Rent</span>';
                            }
                            else{
                                
                            }
                            
                            ?>
                        </a>
                        <?php echo $images; ?>
                       <?php $img = get_post_meta($data->ID, 'images', true); ?>
                       <?php
                        //if ( function_exists( 'ot_get_option' ) ) {
                        $images = explode( ',', ot_get_option( $data->ID, '' ) );
                            if ( ! empty( $images ) ) {
                        foreach( $images as $ids ) {
                            if ( ! empty( $ids ) ) {
                        $full_img_src = wp_get_attachment_image_src( $ids, '' );
                            echo '<img src="' . $full_img_src . '"/>';
                                    }
                                }
                            }
                        //}
                        ?>
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html"><?php echo $title;  ?></a>
                                    <span>$<?php echo $price;  ?></span>
                                </h3>
                            </div>
                            <p><?php read_more(13); ?></p>
                            <div class="car-tags">
                                <ul>
                                    <li><?php echo $year;  ?></li>
                                    
                                    <?php foreach($brands as $brand) { ?>
                                    <li><?php echo $brand->name; ?></li>
                                    <?php } ?>
                                    <li><?php echo $condi; ?></li>
                                    <li><?php echo $miles;  ?>m</li>
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
                </div>
                <?php

                endforeach;
                ?>
                

                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="thumbnail car-box">
                        <a href="#" class="sale">
                            <span>sale</span>
                        </a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/LAMBORGHINI-2016.jpg" alt="Lamborghini 2016">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html">lamborghini 2016</a>
                                    <span>$399,500</span>
                                </h3>
                            </div>
                            <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                            <div class="car-tags">
                                <ul>
                                    <li>2016</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>11.888m</li>
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
                                <a href="car_details.html">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="thumbnail car-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/JAGUAR-F-TYPE-R.jpg" alt="Jaguar f-type R">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html">Jaguar F-Type R</a>
                                    <span>$105,400</span>
                                </h3>
                            </div>
                            <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                            <div class="car-tags">
                                <ul>
                                    <li>2015</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>10.888m</li>
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
                                <a href="car_details.html">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="thumbnail car-box">
                        <a href="#" class="sale">
                            <span>sale</span>
                        </a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Porsche-Cayen-Last-Serie.jpg" alt="Porsche-Cayen-Last">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html">Porsche-Cayen-Last</a>
                                    <span>$36,000</span>
                                </h3>
                            </div>

                            <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                            <div class="car-tags">
                                <ul>
                                    <li>2015</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>10.888m</li>
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
                                <a href="car_details.html">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 clearfix ">
                    <div class="thumbnail car-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Mercedes-Benz-C-Class.jpg" alt="Vencer-Sarthe-Supercar">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html">Mercedes Benz C Class</a>
                                    <span>$42,650</span>
                                </h3>
                            </div>

                            <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                            <div class="car-tags">
                                <ul>
                                    <li>2012</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>14.18m</li>
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
                                <a href="car_details.html">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="thumbnail car-box">
                        <a href="#" class="sale">
                            <span>sale</span>
                        </a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Vencer-Sarthe-Supercar.jpg" alt="Vencer-Sarthe-Supercar">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html">Vencer Sarthe Supercar</a>
                                    <span>$54,000</span>
                                </h3>
                            </div>

                            <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                            <div class="car-tags">
                                <ul>
                                    <li>2010</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>20.000m</li>
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
                                <a href="car_details.html">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="thumbnail car-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/BMW-E46-M3-DISKI-SERIE.jpg" alt="BMW-E46-M3-DISKI-SERIE">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html">BMW e46 M3 Diski Serie</a>
                                    <span>$49.000</span>
                                </h3>
                            </div>

                            <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                            <div class="car-tags">
                                <ul>
                                    <li>2016</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>12.888m</li>
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
                                <a href="car_details.html">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="thumbnail car-box">
                        <a href="#" class="sale">
                            <span>sale</span>
                        </a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/McLaren-650S.jpg" alt="McLaren-650S">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html">McLaren-650S</a>
                                    <span>$28,490</span>
                                </h3>
                            </div>

                            <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                            <div class="car-tags">
                                <ul>
                                    <li>2016</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>13.28m</li>
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
                                <a href="car_details.html">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="thumbnail car-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Range-Rover-2016.jpg" alt="Range-Rover-2016">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html">Range-Rover-2016</a>
                                    <span>$84,950</span>
                                </h3>
                            </div>

                            <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                            <div class="car-tags">
                                <ul>
                                    <li>2014</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>10.78m</li>
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
                                <a href="car_details.html">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- recent-car end-->

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

<?php get_footer(); ?>