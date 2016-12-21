<?php
/*
***************************************************
*plugin deactive then database table delete here...
***************************************************
*/
//if uninstall not called from WordPress exit

function apoinments_plugin_uninstall(){
	global $wpdb;
	$table = $wpdb->prefix . "appointments"; 
	$contacts = $wpdb->prefix . "contacts"; 
 
	delete_option($table);
	 
	// for site options in Multisite
	delete_site_option($table);
	 
	// drop a custom database table
	$wpdb->query("DROP TABLE IF EXISTS ".$table);
	$wpdb->query("DROP TABLE IF EXISTS ".$contacts);

}
 
