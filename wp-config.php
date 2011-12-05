<?php
require( dirname(__FILE__) . '/wp-includes/my-functions.php' );

$user = get_virtual_user();
if ($user != "/") {
        $configfile = '/wp-config-' . $user . '.php';
}

if ( !file_exists( dirname(__FILE__) . '/' . $configfile) )
        die("There doesn't seem to be a <code>" . $configfile . "</code> file. I need this before we can get started. Nee
d more help? <a href='http://wordpress.org/docs/faq/#wp-config'>We got it</a>. You can <a href='wp-admin/setup-config.php
'>create a <code>wp-config.php</code> file through a web interface</a>, but this doesn't work for all server setups. The 
safest way is to manually create the file.");

require_once( dirname(__FILE__) . '/' . $configfile);
?>
