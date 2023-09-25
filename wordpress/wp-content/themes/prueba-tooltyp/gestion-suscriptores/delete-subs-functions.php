<?php

    function eliminarSub() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'newsletter';
        
        if (isset($_GET['action']) && $_GET['action'] == 'eliminarSub') {
            $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
            $wpdb->delete($table_name, array('id' => $id));
        }
    }

    function eliminarSubsMasivo() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'newsletter';
        
        if (isset($_POST['ids']) && $_GET['action'] == 'eliminarSubsMasivo') {
            $ids = implode(',', array_map('intval', $_POST['ids']));
            $wpdb->query("DELETE FROM $table_name WHERE id IN ($ids)");
        }
    }

?>