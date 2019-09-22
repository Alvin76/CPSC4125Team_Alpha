<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Git Gud',
        'XKCDURL' => 'http://xkcd.com/info.0.json',
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'contact' => 'Contact'
        ],
        'nav_bar' => [
          '' => 'Home',
          'about-me'      => "About Me",
          'random-comic' => 'Random Comic',
          'todays-comic' => 'Todays Comic'
        ],
        'root_path' => 'root',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
