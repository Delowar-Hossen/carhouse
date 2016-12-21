<?php
/*
***************************************************
* admin menu page link and data show here...
***************************************************
*/

	function admin_apointment_pages(){
			ob_start();
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
						    <li role="presentation"><a href="#contact1" aria-controls="contact1" role="tab" data-toggle="tab"> Form Demo</a></li>
						    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
						</ul>
						  <!-- Tab panes -->
						<div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="home">
								<div class="col-md-12">
			                        <div class="form-group">
			                            <label for="email">Contact Form</label>
			                            <div class="input-group">
			                                <span class="input-group-addon"><span class="dashicons dashicons-businessman"></span>
			                                </span>
			                                <input type="email" class="form-control" id="email" placeholder="[contact title='Contact Form']" value="[contact title='Contact Form']" />
			                            </div>
			                        </div>
                    			</div>
							</div>
						    <div role="tabpanel" class="tab-pane" id="contact1">
						    	<div class="col-md-12">
									<p>Contact Form Demo</p>
									<div class="thumbnail">
										<img class="group list-group-image" src="<?php echo plugin_dir_url(__FILE__).'img/contact-forms.png'; ?>" alt="" />
										</div>
									</div>
								</div>
						   
						      	<div role="tabpanel" class="tab-pane" id="settings">
									<div class="panel panel-default">
  										<div class="panel-body">
											<h4>Contact Form</h4>
											<p>Contact form use if you want to anybody can  message to you for contact. And you get information for Client or user. If you use this form you write a shortcode ware you show your contact form just write this shortcode in php tag  <code> echo do_shortcode('[contact title="Contact Form"]'); </code></p>
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
		echo ob_get_clean();
	}
