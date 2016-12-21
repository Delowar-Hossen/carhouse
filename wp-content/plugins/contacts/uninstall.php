<?php
/*
***************************************************
*plugin deactive then database table delete here...
***************************************************
*/
//if uninstall not called from WordPress exit

function apoinments_plugin_uninstall(){
	global $wpdb;
	
	$contacts = $wpdb->prefix . "contacts"; 
 
	delete_option($contacts);
	 
	// for site options in Multisite
	delete_site_option($contacts);
	 
	// drop a custom database table
	$wpdb->query("DROP TABLE IF EXISTS ".$contacts);

}
 
