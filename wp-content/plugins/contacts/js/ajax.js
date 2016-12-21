	/**************************************
	* Contact form data insert by ajax
	***************************************
	*/

	(function($){
		$(document).ready(function(){

			$('#contact_form').submit(ajaxSubmit);
			

			function ajaxSubmit(){
				var contactforms = $(this).serialize();
				var form_btn = jQuery('.advanced-button').find('button[type="submit"]');
        		//var form_result_div = '.successes';
        		//jQuery(form_result_div).remove();


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

