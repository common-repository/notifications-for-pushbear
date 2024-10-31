<?php

function notifications_pb_add_admin_menu()
{

    add_options_page(__('Notifications For Pushbear', 'notifications-for-pushbear'), __('Notifications For Pushbear', 'notifications-for-pushbear'), 'manage_options', 'notifications_for_Pushbear', 'notifications_pb_options_page');

}

function notifications_pb_settings_intro_section_callback()
{

    echo __('Pushbear is a tools can send message from web to wechat User Group， you can use it to notify yourself.', 'notifications-for-pushbear');

}

function notifications_pb_settings_webhook_section_callback()
{
    echo __('Copy the SendKey From <a href="https://pushbear.ftqq.com/admin/#/channel">https://pushbear.ftqq.com/admin/#/channel
</a> ，and paste it below.', 'notifications-for-pushbear');

}

function notifications_pb_options_event_intro_section_callback(){
	echo __('Enable The event you need.', 'notifications-for-pushbear');

}


function notifications_pb_options_page()
{

    ?>
    <form action='options.php' method='post'>

        <h2><?php _e('Notifications For Pushbear', 'notifications-for-pushbear');?></h2>

        <?php
settings_fields('notifications_pb_options_page');
    do_settings_sections('notifications_pb_options_page');
    submit_button();
    ?>

    </form>
    <?php

}

?>