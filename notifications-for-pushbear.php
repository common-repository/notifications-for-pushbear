<?php
/*
Plugin Name:  Notifications For PushBear
Plugin URI:   https://wpstore.app/archives/notifications-for-pushbear/
Description:  A Notifications Plugin For <a href="https://pushbear.ftqq.com"> Pushbear </a>
Version:      0.1
Author:       Bestony
Author URI:   https://wpstore.app/
License:      GPLv3
License URI:  https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:  notifications-for-pushbear
Domain Path:  /languages
 */

include_once 'admin/init.php';
include_once 'events/init.php';
include_once 'inc/Pushbear.php';

use Pushbear;

add_action('init', 'notifications_pb_load_textdomain');
function notifications_pb_load_textdomain() {
	load_plugin_textdomain('notifications-for-pushbear', false, basename(dirname(__FILE__)) . '/languages');
}

