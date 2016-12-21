<?php
/*
***************************************************
* admin menu page link and data show here...
***************************************************
*/

	function admin_apointment_pages(){

		?>
<div class="wrap">
  <div class="panel panel-default">
  	<div class="panel-heading">
  	<h2>Contact Form Plugin</h2>
  	</div>
  	<div class="panel-body">
  				<div class="col-md-6"><!-- Nav tabs -->
						<div class="cards">
						  <ul class="nav nav-tabs" role="tablist">
						      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Shortcode</a></li>
						      <li role="presentation"><a href="#contact1" aria-controls="contact1" role="tab" data-toggle="tab"> Form 1</a></li>
						      <li role="presentation"><a href="#contact2" aria-controls="contact2" role="tab" data-toggle="tab"> Form 2</a></li>
						      <li role="presentation"><a href="#contact3" aria-controls="contact3" role="tab" data-toggle="tab"> Form 3</a></li>
						      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
						  </ul>
						  <!-- Tab panes -->
						  <div class="tab-content">
						      <div role="tabpanel" class="tab-pane active" id="home">
										<div class="col-md-12">
                         <div class="form-group">
                             <label for="email">
                                 Contact Form</label>
                             <div class="input-group">
                                 <span class="input-group-addon"><span class="dashicons dashicons-businessman"></span>
                                 </span>
                                 <input type="email" class="form-control" id="email" placeholder="[contact]" value="[contact]" /></div>
                         </div>
                         <div class="form-group">
                             <label for="email">
                                 Appointment Form 1</label>
                             <div class="input-group">
                                 <span class="input-group-addon"><span class="dashicons dashicons-businessman"></span>
                                 </span>
                                 <input type="email" class="form-control" id="email" placeholder="[apointment type=0]" value="[apointment type=0]"  /></div>
                         </div>
                         <div class="form-group">
                             <label for="email">
                                 Appointment Form 2</label>
                             <div class="input-group">
                                 <span class="input-group-addon"><span class="dashicons dashicons-businessman"></span>
                                 </span>
                                 <input type="email" class="form-control" id="email" placeholder="[apointment type=1]" value="[apointment type=1]"  /></div>
                         </div>
                     </div>
									</div>
						      <div role="tabpanel" class="tab-pane" id="contact1">
										<div class="col-md-12">
											<p>Contact Form Demo</p>
											<div class="thumbnail">
													<img class="group list-group-image" src="<?php echo plugin_dir_url(__FILE__).'img/contact-form.png'; ?>" alt="" />

											</div>
										</div>
									</div>
						      <div role="tabpanel" class="tab-pane" id="contact2">
										<div class="col-md-12">
											<p>Appointmet Form 1 Demo</p>
											<div class="thumbnail">
													<img class="group list-group-image" src="<?php echo plugin_dir_url(__FILE__).'img/apointment-form-1.png'; ?>" alt="" />
											</div>
										</div>
									</div>
						      <div role="tabpanel" class="tab-pane" id="contact3">
										<div class="col-md-12">
											<p>Appointmet Form 1 Demo</p>
											<div class="thumbnail">
													<img class="group list-group-image" src="<?php echo plugin_dir_url(__FILE__).'img/apointment-form-2.png'; ?>" alt="" />

											</div>
										</div>
									</div>
						      <div role="tabpanel" class="tab-pane" id="settings">
										<div class="panel panel-default">
  										<div class="panel-body">
												<h4>Contact Form</h4>
												<p>Contact form 1 use if you want to anybody can  message to you for contact. And you get information for Client or user. If you use this form you write a shortcode ware you show your contact form just write this shortcode in php tag  <code> echo do_shortcode('[contact]'); </code></p>
											</div>
										</div>
										<div class="panel panel-default">
  										<div class="panel-body">
												<h4>Appointment Form 1</h4>
												<p>Appointment Form 1 use if you want to anybody can  message to you for contact. And you get information for Client or user. If you use this form you write a shortcode ware you show your contact form just write this shortcode in php tag  <code> echo do_shortcode('[apointment type=1]'); </code></p>
											</div>
										</div>
										<div class="panel panel-default">
  										<div class="panel-body">
												<h4>Appointment Form 2</h4>
												<p>Appointment Form 2 use if you want to anybody can  message to you for contact. And you get information for Client or user. If you use this form you write a shortcode ware you show your contact form just write this shortcode in php tag  <code> echo do_shortcode('[apointment type=1]'); </code></p>
											</div>
										</div>


									</div>
						  </div>
				  	</div>
    			</div>
  			</div>
  </div>
</div>

		<?php
	}
