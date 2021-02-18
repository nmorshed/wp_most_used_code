<?php

/*****************************************************************
    Create a table into Database on Plugin activation
*****************************************************************/

// version for database
if ( !get_option('plugin_name_db_version') ){
    add_option( "plugin_name_db_version", "1.0" );
}


global $plugin_name_db_version;
$plugin_name_db_version = '1.0';


// The Function
function plugin_name_create_database_table(){
    
    global $wpdb;
    global $plugin_name_db_version;

    $table_name = $wpdb->prefix . 'table_name';
    
    $charset_collate = $wpdb->get_charset_collate();

    // The create table query
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT(6) NOT NULL AUTO_INCREMENT ,
        ....
        ....
        ....
        title TINYTEXT NULL ,
        value TEXT NULL ,
        create_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    
    dbDelta( $sql );

    // Keep a record of plugin version
    update_option( 'plugin_name_db_version', $plugin_name_db_version );
}

register_activation_hook( __FILE__, 'plugin_name_create_database_table' );