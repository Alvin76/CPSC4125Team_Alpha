<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}

/**
 * Displays site url provided in conig.
 */
function site_url()
{
    echo config('site_url');
}

/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}

/**
 * Website navigation.
 */
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    foreach ($nav_items as $uri => $name) {
        $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }
    echo trim($nav_menu, $sep);
}

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.phtml';
    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }
    echo file_get_contents($path);
}

/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}

/*
Assignment 2 Things
*/

$websiteURL = 'https://jonesevanassignment2.herokuapp.com';
$nav_items = array('Home Page', "Today's Comic", 'Random Comic');
$urls = array('home.php', 'today.php', 'random.php');


function head(){
  $head = '<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Required PHP Functions -->

    <title>Evan Jones</title>
  </head>';
  echo $head;
}



function getTodaysComic(){
$url = "https://xkcd.com/info.0.json";

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt_array($handle,
array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true
)
);
$output = curl_exec($handle);
$response = json_decode($output, true);
curl_close($handle);


echo $response['title'].'<br>';
echo $response['year'].'<br>';
echo '<img src=" '.$response['img'].' " alt="test">';
}

function getRandomComic(){
  $random = rand(1,2100);
  $url = 'https://xkcd.com/'.$random.'/info.0.json';
  $handle = curl_init();
  curl_setopt($handle, CURLOPT_URL, $url);
  curl_setopt_array($handle,
  array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true
  )
  );
  $output = curl_exec($handle);
  $response = json_decode($output, true);
  curl_close($handle);

  echo $response['title'].'<br>';
  echo $response['year'].'<br>';
  echo '<img src=" '.$response['img'].' " alt="random">';

}




function nav_bar()
{
  global $nav_items, $urls;

  $navbar = '<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="alpaca.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Evan Jones 2
      </a>
    </nav>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">';
  echo $navbar;
  for ($x = 0; $x < sizeof($nav_items) ; $x++) {
    $nav_bar_menu .= '<li class="nav-item"><a class="nav-link" href= /' . $urls[$x] . '>'. $nav_items[$x] .'</a></li>';
  }
  echo $nav_bar_menu;

  $closeNavBar = '</ul>
      </div>
    </nav>';
  echo $closeNavBar;
}

function footer()
{
  $footertag = '<footer>';
  $footerclosetag = '</footer>';
  global $websiteURL;
  echo $footertag;
  echo '<p>Evan Jones ' . $websiteURL . ' CPSC 4125</p>';
  echo $footerclosetag;
}

function getRandom(){
  $randNumber = rand(0,2000);
  echo $randNumber;

}


function newComic(){
  $message = "button pressed";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
