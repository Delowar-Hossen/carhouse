/*jQuery(document).ready(function(e) {
    

    // Appointment Form Validation edit by me
    jQuery("#appointment_form_at_home").validate({
      submitHandler: function(form) {
        var form_btn = jQuery(form).find('button[type="submit"]');
        var form_result_div = '.success';
        jQuery(form_result_div).remove();
        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
        var form_btn_old_msg = form_btn.html();
        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
        jQuery(form).ajaxSubmit({
          dataType:  'json',
          success: function(data) {
            if( data.status == 'true' ) {
              jQuery(form).find('.form-control').val('');
            }
            form_btn.prop('disabled', false).html(form_btn_old_msg);
            jQuery(form_result_div).html(data.message).fadeIn('slow');
            setTimeout(function(){ jQuery(form_result_div).fadeOut('slow') }, 6000);
          }
        });
      }
    });

    // Appointment Form Validation edit by me
    jQuery("#appointment_form").validate({
      submitHandler: function(form) {
        var form_btn = jQuery(form).find('button[type="submit"]');
        var form_result_div = '#form-result';
        jQuery(form_result_div).remove();
        form_btn.before('&amp;lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&amp;gt;&amp;lt;/div&amp;gt;');
        var form_btn_old_msg = form_btn.html();
        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
        jQuery(form).ajaxSubmit({
          dataType:  'json',
          success: function(data) {
            if( data.status == 'true' ) {
              jQuery(form).find('.form-control').val('');
            }
            form_btn.prop('disabled', false).html(form_btn_old_msg);
            jQuery(form_result_div).html(data.message).fadeIn('slow');
            setTimeout(function(){ jQuery(form_result_div).fadeOut('slow') }, 6000);
          }
        });
      }
    });

    //Contact Form Validation
    jQuery("#contact_form").validate({
      submitHandler: function(form) {
        var form_btn = jQuery(form).find('button[type="submit"]');
        var form_result_div = '#form-result';
        jQuery(form_result_div).remove();
        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
        var form_btn_old_msg = form_btn.html();
        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
        jQuery(form).ajaxSubmit({
          dataType:  'json',
          success: function(data) {
            if( data.status == 'true' ) {
              jQuery(form).find('.form-control').val('');
            }
            form_btn.prop('disabled', false).html(form_btn_old_msg);
            jQuery(form_result_div).html(data.message).fadeIn('slow');
            setTimeout(function(){ jQuery(form_result_div).fadeOut('slow') }, 6000);
          }
        });
      }
    });

    
});


*/