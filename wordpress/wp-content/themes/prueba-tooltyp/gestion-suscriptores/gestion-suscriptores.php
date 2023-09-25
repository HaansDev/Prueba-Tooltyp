<?php

require_once dirname(__FILE__) . '/subs-functions.php';
require_once dirname(__FILE__) . '/delete-subs-functions.php';
require_once dirname(__FILE__) . '/export-subs-functions.php';
require_once dirname(__FILE__) . '/page-functions.php';


add_action('admin_init', 'eliminarSub');
add_action('admin_init', 'eliminarSubsMasivo');
add_action('admin_init', 'exportarSubs');
