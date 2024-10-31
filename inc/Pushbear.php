<?php

class Pushbear
{
    protected $method = 'POST';
    protected $options;
    protected $base_url = 'https://pushbear.ftqq.com/sub'; // API Endpoint of Pushbear

    public function __construct()
    {
        $this->options = get_option('notifications_pb_settings');
    }
    public function request(string $text, string $desp)
    {
		
        $body = array(
            'sendkey' => $this->options['notifications_pb_sendkey'],
            'text' => $text,
            'desp' => $desp
		);
		

        $args = array(
            'body' => $body
		);

        $result = wp_remote_post($this->base_url, $args);
    }
}
