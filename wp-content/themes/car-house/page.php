<?php
/*
    Template Name: Car List
*/
    get_header();

?>
<?php $search = new WP_Advanced_Search('demo-ajax-form'); ?>
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
                <div id="wpas-results"></div>
                <div id="wpas-debug"></div>
               

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

            </div>
        </div>

    </div>
</div>
<!-- car-list end-->

<?php
    get_footer();
?>