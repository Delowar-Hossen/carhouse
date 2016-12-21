<?php get_header(); ?>

<!-- page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>Chevrolet Impala</h2>
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

<!-- car-details start-->
<div class="car-details">
    <div class="container">
        <div class="row">
        <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post();

            $title = get_the_title(get_the_ID());
            $content = get_the_content(get_the_ID());
            $images = get_post_meta( get_the_ID(), 'images', true );
            $price = get_post_meta(get_the_ID(),'carprice', true);
            $comments = get_post_meta(get_the_ID(),'comments', true);
            $checkbox1 = get_post_meta(get_the_ID(),'checkbox1', true);
            $checkbox2 = get_post_meta(get_the_ID(),'checkbox2', true);
            $checkbox3 = get_post_meta(get_the_ID(),'checkbox3', true);
            // Technical Specifications
            $cylindernum = get_post_meta(get_the_ID(),'cylindernum', true);
            $displacement= get_post_meta(get_the_ID(),'displacement', true);
            $enginelayout= get_post_meta(get_the_ID(),'enginelayout', true);
            $horespower  = get_post_meta(get_the_ID(),'horespower', true);
            $rpm         = get_post_meta(get_the_ID(),'rpm', true);
            $torque      = get_post_meta(get_the_ID(),'torque', true);
            $compressionratio= get_post_meta(get_the_ID(),'compressionratio', true);
            // Sidebar variable ...
            $body_style = get_post_meta(get_the_ID(),'body_style', true);
            $engine = get_post_meta(get_the_ID(),'engine', true);
            $transmission = get_post_meta(get_the_ID(),'transmission', true);
            $drivetrain = get_post_meta(get_the_ID(),'drivetrain', true);
            $exaterion = get_post_meta(get_the_ID(),'exaterion', true);
            $interior = get_post_meta(get_the_ID(),'interior', true);
            $miles = get_post_meta(get_the_ID(),'miles', true);
            $doors = get_post_meta(get_the_ID(),'doors', true);
            $passengers = get_post_meta(get_the_ID(),'passengers', true);
            $vin = get_post_meta(get_the_ID(),'vin', true);
            $fuel = get_post_meta(get_the_ID(),'fuel', true);
            $fueltypes = get_post_meta(get_the_ID(),'fueltypes', true);
            $condition = get_post_meta(get_the_ID(),'condition', true);
            $owners = get_post_meta(get_the_ID(),'owners', true);
            $wareanty = get_post_meta(get_the_ID(),'wareanty', true);

        ?>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="section-heading">
                                <i class="fa fa-car"></i>
                                <h2><?php echo $title; ?></h2>
                                <div class="border"></div>
                                <h4>Details of <?php echo $title; ?></h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                            <div class="car-details-header-price">
                                <h3>$<?php echo $price; ?></h3>
                                <p>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- car-detail-slider start-->
                <div class="car-detail-slider">
                    <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                        <div class='carousel-outer'>
                            <!-- Wrapper for slides -->
                            <div class='carousel-inner'>
                                
                            <?php 
                            
                            $images = explode(',', get_post_meta(get_the_ID(), 'images', true));
                            if(!empty($images)){
                                $i = -1;
                                foreach($images as $id){
                                    $i++;
                                    $img = wp_get_attachment_image_src($id,'');
                                    ?>
                                <div class='item <?php if($i == 0){ echo "active";}?>'>

                                    <img src='<?php echo $img[0]; ?>' class="thumb-preview" alt='Chevrolet Impala' />
                                </div>
                                <?php
                                }
                            }
                            ?>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                              <span class="slider-mover-left no-bg" aria-hidden="true">
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/left-chevron.png" alt="left-chevron">
                              </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                <span class="slider-mover-right no-bg" aria-hidden="true">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/right-chevron.png" alt="right-chevron">
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <!-- Indicators -->
                        <ol class='carousel-indicators thumbs visible-lg visible-md'>
                            <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='<?php echo get_template_directory_uri(); ?>/img/small-1.jpg' alt='Chevrolet Impala' /></li>
                            <li data-target='#carousel-custom' data-slide-to='1'><img src='<?php echo get_template_directory_uri(); ?>/img/small-2.jpg' alt='Chevrolet Impala' /></li>
                            <li data-target='#carousel-custom' data-slide-to='2'><img src='<?php echo get_template_directory_uri(); ?>/img/small-3.jpg' alt='Chevrolet Impala' /></li>
                            <li data-target='#carousel-custom' data-slide-to='3'><img src='<?php echo get_template_directory_uri(); ?>/img/small-4.jpg' alt='Chevrolet Impala' /></li>
                            <li data-target='#carousel-custom' data-slide-to='4'><img src='<?php echo get_template_directory_uri(); ?>/img/small-5.jpg' alt='Chevrolet Impala' /></li>
                            <li data-target='#carousel-custom' data-slide-to='5'><img src='<?php echo get_template_directory_uri(); ?>/img/small-6.jpg' alt='Chevrolet Impala' /></li>
                            <li data-target='#carousel-custom' data-slide-to='6'><img src='<?php echo get_template_directory_uri(); ?>/img/small-7.jpg' alt='Chevrolet Impala' /></li>
                        </ol>
                    </div>
                </div>
                <!-- banner End-->
                <div class="clearfix"></div>
                <!--car-details-content-body start-->
                <div class="car-details-content-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1default" data-toggle="tab">Vehicle Overview</a></li>
                        <li><a href="#tab2default" data-toggle="tab">Features & Options</a></li>
                        <li><a href="#tab3default" data-toggle="tab">Technical Specifications</a></li>
                        <li><a href="#tab5default" data-toggle="tab">Other Comments</a></li>
                    </ul>
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">
                                    <?php echo $content; ?>
                                </div>
                                <div class="tab-pane fade features" id="tab2default">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <ul>
                                            <?php foreach($checkbox1 as $check){  ?>
                                            <li><i class="fa fa-check"></i><?php echo $check; ?></li>
                                           <?php } ?>
                                         </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                             <?php foreach($checkbox2 as $check){  ?>
                                            <li><i class="fa fa-check"></i><?php echo $check; ?></li>
                                           <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <?php foreach($checkbox3 as $check){  ?>
                                            <li><i class="fa fa-check"></i><?php echo $check; ?></li>
                                           <?php } ?> 
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade technical" id="tab3default">
                                    <ul>
                                        <?php if($cylindernum != ''){ ?>
                                        <li>Layout / number of cylinders <span> <?php echo $cylindernum; ?></span></li>
                                        <?php } ?>
                                        <?php if($displacement != ''){ ?>
                                        <li>
                                            Displacement <span> <?php echo $displacement; ?></span>
                                        </li>
                                         <?php } ?>
                                        <?php if($enginelayout != ''){ ?>
                                        <li>
                                            Engine Layout <span> <?php echo $enginelayout; ?></span>
                                        </li>
                                         <?php } ?>
                                        <?php if($horespower != ''){ ?>
                                        <li>
                                            Horespower <span> <?php echo $horespower; ?></span>
                                        </li>
                                         <?php } ?>
                                        <?php if($rpm != ''){ ?>
                                        <li>
                                            @ rpm <span> <?php echo $rpm; ?></span>
                                        </li>
                                         <?php } ?>
                                        <?php if($torque != ''){ ?>
                                        <li>
                                            Torque <span> <?php echo $torque; ?></span>
                                        </li>
                                         <?php } ?>
                                        <?php if($compressionratio != ''){ ?>
                                        <li>
                                            Compression ratio <span> <?php echo $compressionratio; ?></span>
                                        </li>
                                         <?php } ?>
                                    </ul> 
                                </div>
                                <div class="tab-pane fade" id="tab5default">
                                   <?php echo $comments; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!--car-details-content-body end-->
            
                <!--comments-box start-->
                <div class="comments-box">
                    <h3>Comments</h3>
                    <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = '//localhost-8000-single-post.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                       
                </div>
                <!-- comments-box end-->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="car-sidebar-right">
                    <div class="car-detail-block mrg-b-30">
                        <div class="section-heading" style="padding: 0px 0px 15px 0px">
                            <i class="fa fa-search-plus"></i>
                            <h2>Car specifications</h2>
                            <div class="border"></div>
                            <h4>Check the car specifications</h4>
                        </div>
                        <h2 class="title">Detials</h2>
                        <ul class="car-detail-info-list">
                            <?php if($body_style != ''){ ?>
                            <li><span>Body Style:</span>Convertible
                            </li>
                            <?php } ?>
                            <?php if($engine != ''){ ?>
                            <li><span>Engine:</span> <?php echo $engine; ?>
                            </li>
                            <?php } ?>
                            <?php if($transmission != ''){ ?>
                            <li><span>Transmission:</span><?php echo $transmission; ?>
                            </li>
                            <?php } ?>
                            <?php if($drivetrain != ''){ ?>
                            <li><span>Drivetrain:</span><?php echo $drivetrain; ?>
                            </li>
                            <?php } ?>
                            <?php if($exaterion != ''){ ?>
                            <li><span>Exaterion:</span><?php echo $exaterion; ?>
                            </li>
                            <?php } ?>
                            <?php if($interior != ''){ ?>
                            <li><span>Interior:</span><?php echo $interior; ?>
                            </li>
                            <?php } ?>
                            <?php if($miles != ''){ ?>
                            <li><span>Miles:</span><?php echo $miles; ?>
                            </li>
                            <?php } ?>
                            <?php if($doors != ''){ ?>
                            <li><span>Doors:</span><?php echo $doors; ?>
                            </li>
                            <?php } ?>
                            <?php if($passengers != ''){ ?>
                            <li><span>Passengers:</span><?php echo $passengers; ?>
                            </li>
                            <?php } ?>
                            <?php if($vin != ''){ ?>
                            <li><span>Vin #:</span><?php echo $vin; ?>
                            </li>
                            <?php } ?>
                            <?php if($fuel != ''){ ?>
                            <li><span>Fuel Mileage:</span><?php echo $fuel; ?>
                            </li>
                            <?php } ?>
                            <?php if($fueltypes != ''){ ?>
                            <li><span>Fuel Type:</span><?php echo $fueltypes; ?>
                            </li>
                            <?php } ?>
                            
                            <?php if($condition != ''){ ?>
                            <li><span>Condition:</span><?php echo $condition; ?></li>
                            <?php } ?>
                            <?php if($owners != ''){ ?>
                            <li><span>Owners:</span><?php echo $owners; ?></li>
                            <?php } ?>
                            <?php if($wareanty != ''){ ?>
                            <li><span>Waeeanty:</span><?php echo $wareanty; ?></li>
                            <?php } ?>
                        </ul>
                    </div>

                     <?php endwhile; ?>

                        <?php else : ?>

                            <p>Sorry, no posts matched your criteria.</p>

                        <?php endif; ?>

                        <?php wp_reset_query(); ?>

                    <div class="share mrg-b-30">
                        <h2>Share</h2>
                        <ul class="footer-social-list">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="rss">
                                   <i class="fa fa-rss"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="vimeo">
                                    <i class="fa fa-vimeo"></i>
                                </a>
                            </li>
                        </ul>
                   </div>
                    
                    <div class="clearfix"></div>

                   <div class="private-message-to-dealer mrg-b-30">
                       <h2 class="title">PRIVATE MESSAGE TO DEALER</h2>

                       <form action="#">
                            <div class="row">
                                <div class="form-group  col-xs-12 col-sm-12 col-md-12">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                                </div>
                                <div class="form-group  col-xs-12 col-sm-12 col-md-12">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>          
                                <div class="form-group  col-xs-12 col-sm-12 col-md-12">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="messag2" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value =='Message') this.value=''">Message</textarea>
                                </div>           
                               <div class="form-group  col-xs-12 col-sm-12 col-md-12">
                                     <button type="submit" class="btn btn-default btn-submit col-xs-12">Submit</button>
                                </div>
                            </div>            
                        </form>
                   </div>
                    
                    <div class="clearfix"></div>

                    <div class="Recent-news pdng">
                        <h2 class="title">Recent News</h2>
                    
                        <?php
                        global $data;
                        $datas = get_posts([
                                        'posts_per_page'    => '3',
                                        'post_type'         => 'products',
                                        'post_status'       => 'publish',
                                        'order'             => 'DESC'
                                ]);

                        foreach($datas as $data): setup_postdata($data);
                        $title = get_the_title($data->ID);
                        $images = get_the_post_thumbnail($data->ID,'recents','img-responsive media-object');
                        $price = get_post_meta($data->ID,'carprice', true);
                    ?>
                    <div class="media">
                        <div class="media-left">
                            <a href="<?php echo get_the_permalink($data->ID); ?>">
                               <?php echo $images; ?>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="<?php echo get_the_permalink($data->ID); ?>"><?php echo $title; ?></a>
                            <div class="line-dec-o"></div>
                            <span>$<?php echo $price; ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
        <!--comments-box end-->
    </div>
</div>
<!-- car-details start-->

<?php get_footer(); ?>