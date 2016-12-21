<!-- footer start-->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer-item ">
                <div class="footer-item-content">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo-1"> -->
                     <img src="<?php get_option_tree('home_logo','','true'); ?>" alt="CAR HOUSE">
                    <p>Maecenas ne mollis orci. Phasell iacu sapie non aliquet ex euismo ac.</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                                 <?php get_option_tree('contact_address','',true); ?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+55-417-634-7071"><i class="fa fa-phone pr-5 pl-10"></i>  + <?php get_option_tree('contact_office','',true); ?></a>
                        </li>
                        <li>
                            <a href="mailto:sales@carhouse.com">
                                <i class="fa fa-envelope-o pr-5 pl-10"></i> <?php get_option_tree('contact_email','',true); ?>
                            </a>
                        </li>
                    </ul>

                    <ul class="footer-social-list">
                        
                        <li>
                            <a href="<?php get_option_tree('contact_facebook','',true); ?>" class="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_option_tree('contact_twitter','',true); ?>" class="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_option_tree('contact_linkedin','',true); ?>" class="linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_option_tree('contact_google','',true); ?>" class="google">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_option_tree('contact_rss','',true); ?>" class="rss">
                                <i class="fa fa-rss"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_option_tree('contact_vimeo','',true); ?>" class="vimeo">
                                <i class="fa fa-vimeo"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 footer-item">
                <div class="footer-item-content">
                    <h2>What we offer ?</h2>
                    <div class="line-dec"></div>
                    <ul>
                        <li>
                             <a href=""><?php get_option_tree('footer_offer','',true); ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 footer-item ">
                <div class="footer-item-content">
                    <h2>tags</h2>
                    <div class="line-dec"></div>
                    <?php

                        $terms = get_terms( 'team_tag');
                        foreach( $terms as $term ){
                        ?>
                        <a href="#" class="tags"><?php echo $term->name; ?></a>
                        <?php
                        }
                    ?>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 footer-item ">
                <div class="footer-item-content">
                    <h2>Recent motors</h2>
                    <div class="line-dec"></div>
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

            <div class="col-md-2 col-sm-6 footer-item ">
                <div class="footer-item-content">
                    <h2>Gallery</h2>
                    <div class="line-dec"></div>
                    <?php 

                    //$images = get_option_tree('footer_gallery','','true');
                    if(function_exists('ot_get_option')){
                        $images = explode(',', ot_get_option('footer_gallery', ''));
                        if(!empty($images)){
                            foreach($images as $id){
                            $img = wp_get_attachment_image_src($id,''); 
                            echo '<div class="gallery-item"><img src="'.$img[0].'" alt="01-gallery"></div>';
                            }
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->

<!-- sub-footer start-->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p><?php get_option_tree('policy','','true'); ?></p>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs ">
                 <?php wp_nav_menu( array(
                            'sort_column' => 'menu_order',
                            'theme_location' => 'primary',
                            'menu_class' => '',
                            'fallback_cb' => 'wp_page_menu'
                        ) ); 
                ?>
                
            </div>
        </div>
    </div>
</div>
<!-- sub-footer end-->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script id="dsq-count-scr" src="//localhost-8000-single-post.disqus.com/count.js" async></script>

<script>
    
    jQuery(document).ready(function(){
       // jQuery('#bs-example-navbar-collapse-1 ul').addClass('');
       jQuery('#wpas-meta_carprice1').before("<h2 class='title'>Price</h2>");
       jQuery('#wpas-tax_brands').before("<div class='col-md-12'><div class='row'><h2 class='title'>Brands</h2></div></div>");
       jQuery('.wpas-tax_brands-checkbox-container').addClass("checkbox checkbox-theme checkbox-circle");
       jQuery('.wpas-meta_key-field').addClass("");
       jQuery('#meta_carprice1').before('<div class="price-box"><label>Min price</label></div>');
       jQuery('#meta_carprice2').before('<div class="price-box"><label>Max price</label></div>');
       jQuery('#meta_carprice1').addClass("form-control");
       jQuery('#meta_carprice2').addClass("form-control");
       
    });

 

</script>


<?php wp_footer(); ?>
</body>
</html>