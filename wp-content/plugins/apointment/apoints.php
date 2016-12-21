<?php
/*
Plugin Name: Contact Message
Plugin URI: http://aimsdevelop.com/
Description: this is nice for anyone try to message and it save database and show admin dashboard.
Author: Md. Delowar Hossen
Version: 1
Author URI: http://aimsdevelop.com
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/**********************************************
*  plugin  activated and deactivation hook
***********************************************
*/
register_activation_hook(__FILE__,'create_apoinment_table'); // config.php
register_deactivation_hook( __FILE__, 'apoinments_plugin_uninstall'); // uninstall.php


/**********************************************
*  plugin all file added here ....
***********************************************
*/
if(is_admin()){
require_once( plugin_dir_path(__FILE__). 'config.php');
require_once( plugin_dir_path(__FILE__). 'uninstall.php');
require_once( plugin_dir_path(__FILE__). 'messages.php');
require_once( plugin_dir_path(__FILE__). 'all_apointments.php');
require_once( plugin_dir_path(__FILE__). 'apoint_edit.php');
require_once( plugin_dir_path(__FILE__). 'contacts.php');
}
require_once( plugin_dir_path(__FILE__). 'shortcode.php');


/**********************************************
*  plugin all css and js file added here ....
***********************************************
*/
function health_custom_plugins_criptsss(){

	if(is_admin()){

	wp_enqueue_style('custom_plugin_css', plugin_dir_url(__FILE__).'css/bootstrap.min.css',false, '1.0');
	wp_enqueue_style('style_css', plugin_dir_url(__FILE__).'css/style.css',false, '1.0');
	wp_enqueue_style('tables_css', plugin_dir_url(__FILE__).'css/demo_table.css',false, '1.0');
	wp_enqueue_script('custom_plugin_js', plugin_dir_url(__FILE__).'js/bootstrap.min.js',array('jquery'),true);
	wp_enqueue_script('dataTables', plugin_dir_url(__FILE__).'js/jquery.dataTables.min.js',array('jquery'),true);
	wp_enqueue_script('custom_js', plugin_dir_url(__FILE__).'js/custom.js',array('jquery'),true);
	}
}
add_action('admin_enqueue_scripts','health_custom_plugins_criptsss');


/**********************************************
*  wp dashboard sidebar menu create ....
***********************************************
*/
function admin_sidebar_menu_bar(){

	add_menu_page(  'Apointment',
					'Apoinments',
					'manage_options',
					'apointment/messages.php',
					'admin_apointment_pages',
					'dashicons-businessman', 6
					 );

	/*add_options_page( 'Apointment',
					'Apoinments',
					'manage_options',
					'admin_apointment_pages',
					'dashicons-businessman', 6
					 );*/ // for setting menu add...

}
add_action('admin_menu','admin_sidebar_menu_bar');


/**********************************************
*  wp dashboard submenu add ....
***********************************************
*/
function submenu_pages(){
	add_submenu_page(
					'apointment/messages.php',
					'Apointment',
					'All Apointment',
					'manage_options',
					'apointment_view',
					'admin_appoinments_all_callback'
				);

	add_submenu_page(
					'apointment/messages.php',
					'All Contacts',
					'All Contacts',
					'manage_options',
					'contacts_view',
					'admin_user_contact_data'
				);
}
add_action('admin_menu','submenu_pages');


/**********************************************
*  ajax file called to plugin ....
***********************************************
*/
function ajax_form_submit_health(){
	wp_enqueue_script('extra_collection', plugin_dir_url(__FILE__).'js/jquery-2.2.4.min.js',array('jquery'),true);
	wp_enqueue_script('extra_collection', plugin_dir_url(__FILE__).'js/jquery-plugin-collection.js',array('jquery'),true);
	wp_enqueue_script('extra', plugin_dir_url(__FILE__).'js/extra.js',array('jquery'),true);
}
add_action('wp_enqueue_scripts', 'ajax_form_submit_health');

/**********************************************
*  ajax file called to plugin ....
***********************************************
*/
function add_ajax_file(){

	wp_enqueue_script('custom_ajax', plugins_url('js/ajax.js',__FILE__),array('jquery'),true);

	wp_localize_script('custom_ajax','my_ajax_url', array(
			'ajax_url'	=> admin_url( 'admin-ajax.php')
		));

}
add_action('wp_enqueue_scripts', 'add_ajax_file');
add_action('admin_enqueue_scripts', 'add_ajax_file');





/**********************************************
*  apointment data show by ajax ....
***********************************************
*/
add_action('wp_ajax_apoinment_showdata', 'apoinment_showdata');
add_action('wp_ajax_nopriv_apoinment_showdata', 'apoinment_showdata');

function apoinment_showdata(){
	global $wpdb;
	$tables   = $wpdb->prefix."appointments";
	$results  = $wpdb->get_results("select * from $tables order By created_at DESC");
	//var_dump($results);
	foreach($results as $result){
		$name = $result->name;
		$email = $result->email;
		$phone = $result->phone;
		$services = $result->services;
		$ap_date = strtotime($result->apoint_date);
		$time 	= date('d-M-Y',$ap_date);
		$message= $result->message;

		$data ='<tr>';
		$data .='<td>'.$name.'</td>
				<td>'.$email.'</td>
				<td>'.$phone.'</td>
				<td>'.$services.'</td>
				<td>'.$time.'</td>
				<td>'.$message.'</td>
				<td><a href="#" class="btn btn-default btn-xs "><span class="dashicons dashicons-edit"></span></a><button type="submit"  name="submit" class="btn btn-default btn-xs"><span class="dashicons dashicons-trash"></span></button></td><input type="hidden" id="'.$result->id.'">';
		$data .= '</tr>';
		echo $data;
	}
		wp_die();
}
