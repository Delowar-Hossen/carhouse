<?php

/********************************************** 
*  contacts data insert by ajax ....
***********************************************
*/
add_action('wp_ajax_wp_contacts_inserts', 'wp_contacts_inserts');
add_action('wp_ajax_nopriv_wp_contacts_inserts', 'wp_contacts_inserts');

function wp_contacts_inserts(){
	global $wpdb;
	$table = $wpdb->prefix . "contacts"; 

	$name    = esc_attr(strip_tags($_POST["form_name"]));
    $email   = esc_attr(strip_tags($_POST["form_email"]));
    $website = esc_attr(strip_tags($_POST["form_website"]));
    $phone 	 = esc_attr(strip_tags($_POST["form_phone"]));
    $message = esc_attr(strip_tags($_POST["form_message"]));

    if ( $_POST["form_name"] != ""  && $_POST["form_email"] != ""  && $_POST["form_phone"] != ""  &&  $_POST["form_message"] != "") {
	if($wpdb->insert( $table ,array( 
                'name'       => $name,
                'email'      => $email,
                'phone'      => $phone,
                'website'    => $webiste,
                'message'    => $message,
                'created_at' => date('Y-m-d H:i:s')
            ))){
		
		echo '<div class="alert alert-success"><strong>Hi '.$name.',</strong> Your Message successfully Send ...</div>';

		wp_die();
	}

	}else{
		echo '<div class="alert alert-danger"><strong>Warning!</strong> All * Mark Field Are Required !!</a>..</div>';

	}

	wp_die();

}


/********************************************** 
*  contacts form controll to admin dashboard ......
***********************************************
*/
function admin_user_contact_data(){
		if(isset($_GET['id']) == '' && isset($_GET['action']) == '' ){
			if(isset($_POST['delete'])){
				$id = $_POST['id'];
			    global $wpdb;
				$tables = $wpdb->prefix."contacts";

			    $result = $wpdb->query( "DELETE FROM ".$tables ." where id=".$id);

			    if($result){
			         echo '<div class="alert alert-success alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Success!</strong> Contact Information  Deleted !
						</div>';
			       
			    }

		}

		ob_start();
?>
	<div class="wrap">
		 <div class="panel panel-default">
			<div class="panel-heading">
			   <h4 class="text-center">All Contacts</h4>
			   <p class="text-center">All Contact data here to service imediately ..</p> 
			  
			</div> 
			  <div id="success" ></div>
			<div class="panel-body">      
			    <table class="table table-striped table-bordered data display datatable"  id="example" >
				    <thead>
				      <tr>
				        <th>Name</th>
				        <th>Email</th>
				        <th>Phone</th>
				        <th>Website</th>
				        <th>Message</th>
				        <th>Status</th>
				        <th>Action</th>
				      </tr>
				    </thead>
			    <tbody class="apoints">
			    <?php 
				global $wpdb;
				$tables   = $wpdb->prefix."contacts";
				$results  = $wpdb->get_results("select * from $tables order By created_at DESC");
				foreach($results as $result){

			    ?>
			    <tr>
			    	<td><?php echo $result->name; ?></td>
			    	<td><?php echo $result->email; ?></td>
			    	<td><?php echo $result->phone; ?></td>
			    	<td><?php echo $result->website; ?></td>
			    	<td><?php echo $result->message; ?></td>
			    	<td><?php if($result->role == 1){
			    		echo "<button class='btn btn-success btn-xs'>Confirmed</button>";
			    	}else{
			    		echo "<button class='btn btn-danger btn-xs'> New Message</button>";
			    	} ?></td>
			    	<td> <a href="<?php echo admin_url( 'admin.php?page=contacts_view&action=edit&id='.$result->id ); ?>"><?php _e( '<button class="btn btn-default btn-xs"><span class="dashicons dashicons-visibility"></span>', 'erp' ); ?></a>
			    	<form method="post" action=""><button type="submit"  name="delete" class="btn btn-default btn-xs"><span class="dashicons dashicons-trash"></span></button><input type="hidden" name="id" value="<?php echo $result->id; ?>"></td></form>
			    </tr>
			    <?php } ?>
			    </tbody>
			  </table>
			  
			</div>
		</div>
	</div>
		<?php
		echo ob_get_clean();

	}elseif(!isset($_GET['id']) == '' && $_GET['action'] == 'edit' ){
		$id = $_GET['id'];
		global $wpdb;
		$tables   = $wpdb->prefix."contacts";
		if($id){
			$wpdb->query( "UPDATE $tables SET role='1' WHERE id=$id");  
		}

		$results  = $wpdb->get_results("select * from $tables where id=".$id);
		if(count($results) > 0){
		foreach($results as $result){
			ob_start();
	?>

	<!-- contacts Edit start -->
	<div class="grid">
		<div class="col-sm-12">
			<div class="panel-group">
				<div class="panel panel-default">
		  			<div class="panel-body"><h4 class="text-center">Contact View</h4></div>     
				</div>
				 <div class="panel panel-default">
				    <div class="panel-body table-responsive">
				    	<h4 class="text-center"><?php echo $result->name; ?> Want to Contact</h4>
				    	<div class="col-md-6 col-md-offset-3">
					    	<table class="table table-striped table-bordered table-hover">
							    <thead>
							      <tr>
							        <th>Title</th>
							        <th>Details</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>Name:</td>
							        <td><?php echo $result->name; ?></td>
							      </tr>
							      <tr>
							        <td>Email:</td>
							        <td><?php echo $result->email; ?></td>
							      </tr>
							      <tr>
							        <td>Phone</td>
							        <td><?php echo $result->phone; ?></td>
							      </tr>
							      <tr>
							        <td>Website</td>
							        <td><?php echo $result->website; ?></td>
							      </tr>
							      <tr>
							        <td>Description</td>
							        <td><?php echo $result->message; ?></td>
							      </tr>
							      <tr>
							        <td colspan="2"><a href="<?php echo admin_url( 'admin.php?page=contacts_view' ); ?>"><button class="btn btn-warning btn-sm"><span class="dashicons dashicons-arrow-left-alt"></span> Back</button></a></td>
							      </tr>
							    </tbody>
							</table>
						</div>
				    </div>
				  </div>
			</div>
		</div>

	</div>	
       <!-- contacts Edit End -->

	<?php
		echo ob_get_clean();
			} // foreach end
		}
		
	}

}


