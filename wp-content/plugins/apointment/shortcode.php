<?php

/********************************************** 
*  apointment file data insert by ajax to front page....
***********************************************
*/
add_action('wp_ajax_my_apointment', 'my_apointment');
add_action('wp_ajax_nopriv_my_apointment', 'my_apointment');

// front end apoint data input ...
function my_apointment(){
  global $wpdb;
  $table = $wpdb->prefix . "appointments"; 
  //ob_start();
  $name    = esc_attr(strip_tags($_POST["form_name"]));
    $email   = esc_attr(strip_tags($_POST["form_email"]));
    $phone   = esc_attr(strip_tags($_POST["reservation_phone"]));
    $service = esc_attr(strip_tags($_POST["car_select"]));
    $date    = esc_attr(strip_tags($_POST["form_appontment_date"]));
    $message = esc_attr(strip_tags($_POST["form_message"]));

    if ( $_POST["form_name"] != ""  && $_POST["form_email"] != ""  && $_POST["reservation_phone"] != ""  && $_POST["car_select"] != ""  && $_POST["form_appontment_date"] != ""  && $_POST["form_message"] != "") {
  if($wpdb->insert( $table ,array( 
                'name'       => $name,
                'email'      => $email,
                'phone'      => $phone,
                'services'   => $service,
                'apoint_date'=> $date,
                'message'    => $message,
                'created_at' => date('Y-m-d H:i:s')
            )))/*{
        echo "Error";
    }else */{
    echo "<p style='color:green;font-size:14px;'>Hi ".$name.",<br> Your Appoinment successfully recorded !!</p>";
    wp_die();
  }

  }else{
    echo "<p style='color:red;font-size:14px;'>All Field Are Required !!</p>";

  }

  wp_die();
  //return ob_get_clean();

}





/*
***************************************************
*apointments form Shortcode ... [apointment]
***************************************************
*/
function apoinment_tabless($atts){

	 extract(shortcode_atts(array(
            'type'   => '0',
            'text'      => '',
        ), $atts));

	ob_start();
	 if($type == 0){
?>
      
			<form id="appointment_form_at_home" name="appointment_form_at_home" class="" method="post" action="">
          <div class="messagess"></div>
 				   <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input id="form_name" name="form_name" class="form-control required" type="text"  placeholder="Enter Name" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control required" aria-required="true">
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <div class="styled-select">
                          <select id="car_select" name="car_select" class="form-control required">
                            <option value="">- Select Your Services -</option>
                            <option value="Orthopaedics">Orthopaedics</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Dental">Dental</option>
                            <option value="Haematology">Haematology</option>
                            <option value="Blood Test">Blood Test</option>
                            <option value="Emergency Care">Emergency Care</option>
                            <option value="Outdoor Checkup">Outdoor Checkup</option>
                            <option value="Cancer Service">Cancer Service</option>
                            <option value="Pharmacy">Pharmacy</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input name="form_appontment_date" class="form-control required" type="date" placeholder="Appoinment Date & Time" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="form-group mb-10">
                  <textarea id="form_message" name="form_message" class="form-control required"  placeholder="Enter Message" rows="4" aria-required="true"></textarea>
                </div>
                <div class="form-group mb-0 mt-20">
                  <input id="form_botcheck" name="action" class="form-control" type="hidden" value="my_apointment">
                  <button type="submit" name="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Send Message</button>
                </div>
              </form>

<?php
		} else if($type == 1){
?>

				<form id="appointment_form_at_home" name="appointment_form_at_home" class="reservation-form" method="post" action="">
					<h2 class="mt-0 line-bottom line-height-1 text-black mb-30">Make An Appoinment<span class="text-theme-colored font-weight-600"> Now!</span></h2>
      					<div class="col-sm-12">
       						<div class="messagess"></div>
       					</div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <input placeholder="Enter Name" type="text" id="form_name" name="form_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <input placeholder="Email" type="text" id="form_email" name="form_email" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <div class="styled-select">
                          <select id="car_select" name="car_select" class="form-control">
                            <option value="">- Select Your Services -</option>
                            <option value="Orthopaedics">Orthopaedics</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Dental">Dental</option>
                            <option value="Haematology">Haematology</option>
                            <option value="Blood Test">Blood Test</option>
                            <option value="Emergency Care">Emergency Care</option>
                            <option value="Outdoor Checkup">Outdoor Checkup</option>
                            <option value="Cancer Service">Cancer Service</option>
                            <option value="Pharmacy">Pharmacy</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <input name="form_appontment_date" class="form-control required" type="date" placeholder="Reservation Date" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <textarea id="form_message" name="form_message" class="form-control required" placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-0">
                        <input name="action" class="form-control" type="hidden" value="my_apointment">
                        <button type="submit" name="submit" class="btn btn-theme-colored btn-lg btn-block" data-loading-text="Submitted">Submit Now</button>
                      </div>
                    </div>
                  </div>
                </form>

<?php 
}

 	echo ob_get_clean();

}
add_shortcode('apointments', 'apoinment_tabless');

/*
***************************************************
*Contact form Shortcode ... [contact]
***************************************************
*/

function healths_contacts_form_shortcode($atts){

    extract(shortcode_atts(array(
            'title'   => 'Interested in discussing',
            'text'      => '',
        ), $atts));

    ob_start();
?>

    <form id="contact_form" name="contact_form" class="" action="" method="post" novalidate="novalidate">
              <div class="successes"></div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="" aria-required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject" aria-required="true">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="form_phone" class="form-control required" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message" aria-required="true"></textarea>
              </div>
              <div class="form-group">
                <input name="action" class="form-control" type="hidden" value="health_contacts">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>

            <?php
           echo ob_get_clean();
}
add_shortcode('contact','healths_contacts_form_shortcode');











