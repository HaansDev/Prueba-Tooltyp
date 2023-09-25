<?php

    function obtenerSubs() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'newsletter';
        $subs = $wpdb->get_results("SELECT * FROM $table_name");
        return $subs;
    }

?>