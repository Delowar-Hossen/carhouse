<?php


/*
***************************************************
*Contact form Shortcode ... [contact]
***************************************************
*/

function wp_webs_contacts_form_shortcode($atts){

    extract(shortcode_atts(array(
            'title'   => 'Contact Form',
            'text'      => '',
        ), $atts));

    ob_start();
?>
              <h2 class="title"><?php echo $title; ?></h2>
                <div class="contact-form">
                    <div class="successes"></div>
                    <form id="contact_form" name="contact_form" action="" method="POST" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="name" id="form_name" name="form_name" placeholder="Name *" value="" aria-required="true">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="email" id="form_email" name="form_email" placeholder="Email address *" value="" aria-required="true">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="site"  id="form_phone" name="form_phone" placeholder="Phone *" value="" aria-required="true">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="phone"  id="form_website" name="form_website" placeholder="Your website " value="" aria-required="true">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea id="form_message" class="message" name="form_message" placeholder="Write message *" aria-required="true"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                
                                <input  name="action" class="form-control" type="hidden" value="wp_contacts_inserts">
                                     <button type="submit" class="btn btn-dark advance-button" data-loading-text="Please wait..."> Send Message </button>
                                
                            </div>
                        </div>
                    </form>     
                </div>

            <?php
           echo ob_get_clean();
}
add_shortcode('contact','wp_webs_contacts_form_shortcode');











