<?php
/*
AJAX Results Template Example

This is an example of a template part which can be used to customize how search
results appear when using AJAX.
*/
?>

<?php if ( have_posts() ): ?>
   <?php while ( have_posts() ): the_post(); 
	 $images     = get_the_post_thumbnail(get_the_ID(),'team','img-responsive list-car-pic');
		$price      = get_post_meta(get_the_ID(), 'carprice', true);
	    $miles      = get_post_meta(get_the_ID(), 'miles', true);
	    $color      = get_post_meta(get_the_ID(), 'carcolor', true);
	    $body_style = get_post_meta(get_the_ID(), 'body_style', true);
	    $engine     = get_post_meta(get_the_ID(), 'engine', true);
	    $transmission = get_post_meta(get_the_ID(), 'transmission', true);
	    $passengers = get_post_meta(get_the_ID(), 'passengers', true);
	 
	 ?>
         <div class="car-box">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-xs-12 car-pic-m">
                            <?php echo $images; ?>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-xs-12 car-box-body">
                            <div class="header b-items-cars-one-info-header  s-lineDownLeft">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                                        <a href="<?php the_permalink(); ?>">Details</a>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <?php endwhile; ?>

<?php else : ?>

    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php wp_reset_query(); ?>