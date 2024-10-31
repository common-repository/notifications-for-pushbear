<?php
add_action('user_register', 'notifications_pb_user_register');
function notifications_pb_user_register($user_id)
{
	$api = new Pushbear();
    $options = get_option('notifications_pb_settings');
    if ($options['notifications_pb_user_register']) {
       $api->request('New User Register','User ID:'.$user_id);
    }
}
