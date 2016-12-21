<?php
	function appointment_edit_pages(){

		if(isset($_GET['id']) == '' && isset($_GET['action']) == '' ){
		 echo '<h2>Edit Page..</h2>';

		}else{
		
		?>
		<div class="wrap">
			<h2>Admin Edit Page.. by <?php echo $_GET['id']; ?></h2>
			<h3>Admin Edit Page.. by <?php echo $_GET['action']; ?></h3>
		</div>

		<?php

		}
	}
?>
