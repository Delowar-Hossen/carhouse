/*jQuery(document).ready(function(){

	jQuery('#appointment_form_at_home').submit(ajaxSubmit);

	function ajaxSubmit(){
		var apointmentform = jQuery(this).serialize();

		jQuery.ajax({
			url: my_ajax_url.ajax_url,
			type: 'POST',
			data: apointmentform,
			success: function(response){
			jQuery('.success').html(response).fadeIn('slow');
            setTimeout(function(){ jQuery('.success').fadeOut('slow') }, 6000);
			apointDataShow();
			}
			
		});
		return false;
	}
	

});*/

	// Admin data Update

	/*jQuery(document).ready(function(){

	jQuery('#appointment_form').submit(ajaxUpdate);

	function ajaxUpdate(){
		var apointmentform = jQuery(this).serialize();

		jQuery.ajax({
			url: my_ajax_url.ajax_url,
			type: 'POST',
			data: apointmentform,
			success: function(data){
			jQuery('#success').html(data).fadeIn('slow');
            setTimeout(function(){ jQuery('#success').fadeOut('slow') }, 6000);
			}
			
		});
		return false;
	}
	

});*/

// delete apointment

	(function($){
		$(document).ready(function(){


			/**************************************
			* apointment form data show table by ajax
			***************************************
			*/
			/*function apointDataShow(){
				$.ajax({
					type:"POST",
					url:my_ajax_url.ajax_url,
					data:{ action: 'apoinment_showdata'},
					success:function(data){
						$('.apoints').html(data);
					},
					error: function(error){
			        	console.log('error');
			        }

				});
			}
			apointDataShow();*/

			/**************************************
			* apointment form data insert by ajax
			***************************************
			*/

			$('#appointment_form_at_home').submit(ajaxSubmits);

			function ajaxSubmits(){
				var apointmentforms = $(this).serialize();

				$.ajax({
					url: my_ajax_url.ajax_url,
					type: 'POST',
					data: apointmentforms,
					success: function(response){
					$('.messagess').html(response).fadeIn('slow');
		            setTimeout(function(){ $('.messagess').fadeOut('slow') }, 6000);
					},
					error: function(error){
			        	console.log('error');
			        }
					
				});
				return false;
			}


			/**************************************
			* apointment form data delete by ajax
			***************************************
			*/
		
			function apoint_deletes(sid){
			    var id = sid;
			    //alert(id);
			    $.ajax({
			        type: 'POST',
			        url: my_ajax_url.ajax_url,
			        data: {action: "apointment_delete", id: id},
			        success: function (data) {
			            apointDataShow();
			            $('#success').html(data).fadeIn('slow');
			        },
			        error: function(error){
			        	console.log('error');
			        }
			    });
			}

			/**************************************
			* Contact form data insert by ajax
			***************************************
			*/

			$('#contact_form').submit(ajaxSubmit);

			function ajaxSubmit(){
				var contactforms = $(this).serialize();

				$.ajax({
					url: my_ajax_url.ajax_url,
					type: 'POST',
					data: contactforms,
					success: function(response){
					$('.successes').html(response).fadeIn('slow');
		            setTimeout(function(){ $('.successes').fadeOut('slow') }, 6000);
					},
					error: function(error){
			        	console.log('error');
			        }
					
				});
				return false;
			}

		});

	})(jQuery);

