<?php


	function admin_appoinments_all_callback(){
		if(isset($_GET['id']) == '' && isset($_GET['action']) == '' ){
			if(isset($_POST['delete'])){
				$id = $_POST['id'];
			    global $wpdb;
				$tables = $wpdb->prefix."appointments";

			    $result = $wpdb->query( "DELETE FROM ".$tables ." where id=".$id);

			    if($result){
			         echo '<div class="alert alert-success alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Success!</strong> appointment Data  Deleted !
						</div>';
			       
			    }

			}

			ob_start();
		?>
		
			<div class="panel panel-default">
			  <div class="panel-heading">
			  <h2 class="text-center">All Apoinments</h2>
			  <p class="text-center">All apoinment data here to service imediately ..</p> 
			  
			  </div> 
			  <div id="success" ></div>
			  <div class="panel-body">      
			  <table class="table table-striped table-bordered data display datatable"  id="example" >
			    <thead>
			      <tr>
			        <th>Name</th>
			        <th>Email</th>
			        <th>Phone</th>
			        <th>Services</th>
			        <th>Apoinment Date</th>
			        <th>Message</th>
			        <th>Status</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			   
			    <tbody class="apoints">
			    <?php 
				global $wpdb;
				$tables   = $wpdb->prefix."appointments";
				$results  = $wpdb->get_results("select * from $tables order By created_at DESC");
				//var_dump($results);
				foreach($results as $result){

			    ?>
			    <tr>
			    	<td style="width:10%"><?php echo $result->name ?></td>
			    	<td style="width:15%"><?php echo $result->email ?></td>
			    	<td style="width:10%"><?php echo $result->phone ?></td>
			    	<td style="width:10%"><?php echo $result->services ?></td>
			    	<td style="width:15%"><?php echo $result->apoint_date ?></td>
			    	<td style="width:30%"><?php echo $result->message ?></td>
			    	<td style="width:30%"><?php if($result->role == 1){
			    		echo "<button class='btn btn-success btn-xs'>Confirmed</button>";
			    	}else{
			    		echo "<button class='btn btn-danger btn-xs'> New Message</button>";
			    	} ?></td>
			    	<td style="width:10%"> <a href="<?php echo admin_url( 'admin.php?page=apointment_view&action=edit&id='.$result->id ); ?>"><?php _e( '<button class="btn btn-default btn-xs"><span class="dashicons dashicons-edit"></span>', 'erp' ); ?></a>
			    	<form method="post" action=""><button type="submit"  name="delete" class="btn btn-default btn-xs"><span class="dashicons dashicons-trash"></span></button><input type="hidden" name="id" value="<?php echo $result->id; ?>"></td></form>
			    </tr>
			    <?php } ?>
			    </tbody>
			  </table>
			  
			</div>
		</div>
		<?php
		echo ob_get_clean();
		 	
	}elseif(!isset($_GET['id']) == '' && $_GET['action'] == 'edit' ){
		$id = $_GET['id'];
		global $wpdb;
		$tables   = $wpdb->prefix."appointments";
		if($id){
			$wpdb->query( "UPDATE $tables SET role='1' WHERE id=$id");  
		}

		$results  = $wpdb->get_results("select * from $tables where id=".$id);
		if(count($results) > 0){
		foreach($results as $result){
			ob_start();
	?>

	<!-- Apointment Edit start -->
	<div class="grid">
		<div class="col-sm-12">
			<div class="panel-group">
				<div class="panel panel-default">
		  			<div class="panel-body"><h4 class="text-center">Apointment View</h4></div>     
				</div>
				 <div class="panel panel-default">
				    <div class="panel-body table-responsive">
				    	<h4 class="text-center"><?php echo $result->name; ?> Want to Apointment</h4>
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
							        <td>Service</td>
							        <td><?php echo $result->services; ?></td>
							      </tr>
							      <tr>
							        <td>Apointment Date</td>
							        <td><?php echo $result->apoint_date; ?></td>
							      </tr>
							      <tr>
							        <td>Description</td>
							        <td><?php echo $result->message; ?></td>
							      </tr>
							      <tr>
							        <td colspan="2"><a href="<?php echo admin_url( 'admin.php?page=apointment_view' ); ?>"><button class="btn btn-warning btn-sm"><span class="dashicons dashicons-arrow-left-alt"></span> Back</button></a></td>
							      </tr>
							    </tbody>
							</table>
						</div>
				    </div>
				  </div>
			</div>
		</div>

	</div>	
       <!-- Apointment Edit End -->

	<?php
	echo ob_get_clean();
		}
	}else{
		echo "Data Not Found !";
	}

	}else{
		


	}

	}
