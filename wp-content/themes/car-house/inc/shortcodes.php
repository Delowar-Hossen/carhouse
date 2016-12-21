<?php

/********************************************** 
*  shortcode ....
***********************************************
*/

function health_quick_contact($atts){

	extract(shortcode_atts(array(
            'title'   => 'Quick Contact',
            'text'    => '',
        ), $atts,'doctors'));
	

	$list ='<form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="" method="post">
				<div class="mess"></div>
	              <div class="form-group">
	                <input name="form_email" class="form-control required email" type="text"  placeholder="Enter Email">
	              </div>
	              <div class="form-group">
	                <textarea name="form_message" class="form-control  required" placeholder="Enter Message" rows="3"></textarea>
	              </div>
	              <div class="form-group">
	                <input name="action" class="form-control" type="hidden" value="health_quick_contacts">
	                <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">Send Message</button>
	              </div>
	            </form>';

	wp_reset_query();
    return $list;
}
add_shortcode('quick', 'health_quick_contact');