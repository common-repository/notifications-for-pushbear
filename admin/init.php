<?php
include_once 'sections.php';
add_action('admin_menu', 'notifications_pb_add_admin_menu');
add_action('admin_init', 'notifications_pb_settings_init');

function notifications_pb_settings_init()
{

    register_setting('notifications_pb_options_page', 'notifications_pb_settings');

    add_settings_section(
        'notifications_pb_options_intro_section',
        __('Pushbear Introduce', 'notifications-for-pushbear'),
        'notifications_pb_settings_intro_section_callback',
        'notifications_pb_options_page'
    );
    add_settings_section(
        'notifications_pb_options_webhook_section',
        __('SendKey Settings', 'notifications-for-pushbear'),
        'notifications_pb_settings_webhook_section_callback',
        'notifications_pb_options_page'
    );

    add_settings_field(
        'notifications_pb_sendkey',
        __('SendKey', 'notifications-for-pushbear'),
        'notifications_pb_sendkey_render',
        'notifications_pb_options_page',
        'notifications_pb_options_webhook_section'
    );
    add_settings_section(
        'notifications_pb_options_event_intro_section',
        __('Event Introduce', 'notifications-for-pushbear'),
        'notifications_pb_options_event_intro_section_callback',
        'notifications_pb_options_page'
    );

    add_settings_field(
        'notifications_pb_user_register',
        __('User Event: Register', 'notifications-for-pushbear'),
        'notifications_pb_user_register_render',
        'notifications_pb_options_page',
        'notifications_pb_options_event_intro_section'
    );

}

function notifications_pb_sendkey_render()
{

    $options = get_option('notifications_pb_settings');
    ?>
    <input type='text' name='notifications_pb_settings[notifications_pb_sendkey]' value='<?php echo $options['notifications_pb_sendkey']; ?>'>
    <?php

}

function notifications_pb_user_register_render()
{

    $options = get_option('notifications_pb_settings');
    ?>
    <input type='checkbox' name='notifications_pb_settings[notifications_pb_user_register]' <?php checked($options['notifications_pb_user_register'], 1);?> value='1'>
    <?php

}
