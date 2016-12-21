<?php

function create_apoinment_table(){
	 global $wpdb;
    // creates my_table in database if not exists

    $contacts = $wpdb->prefix . "contacts"; 
    $charset_collates = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $contacts (
        `id` mediumint(9) NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL,
        `email` varchar(100) NOT NULL,
        `website` varchar(100),
        `phone` varchar(25),
        `role` varchar(25),
        `message` text,
        `created_at` TIMESTAMP,
        `updated_at` TIMESTAMP,
    UNIQUE (`id`)
    ) $charset_collates;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    
}



