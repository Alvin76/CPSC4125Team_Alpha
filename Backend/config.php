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
        'pretty_uri' => false,
        'site_url' => 'https://team-alpha-web-site.herokuapp.com/',
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'contact' => 'Contact'
            'results' => 'Results'
        ],
        'nav_bar' => [
          '' => 'Home',
          'about-me'      => "About Me",
          'random-comic' => 'Random Comic',
          'todays-comic' => 'Todays Comic'
        ],
        'template_path' => 'CSS',
        'content_path' => 'Webpages',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
