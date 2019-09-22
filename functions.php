<!--
  $websiteURL = "https://test-app-ericsson.herokuapp.com/";

  function footer(){
    echo "<footer>";
      echo "This is a footer</br>";
    echo "</footer>";
  } -->


<?php
$color='red';
$car='BMW';
$websiteURL = 'https://test-app-ericsson.herokuapp.com/';
$authors = array('James', 'Adam', 'Taylor', 'Evan');
$nav_items = array('Home', 'Todays', 'Random');


function vehicle()
{
  global $color, $car;
  echo "I have two $color $car.";
}

function nav_bar2()
{
  $nav_bar_menu = '';
  $nav_items = config('nav_bar');
  foreach ($nav_items as $uri => $name) {
    $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
    $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
    $nav_bar_menu .= '<li class="nav-item"><a class="nav-link" href= "' . $url . '">'. $name .'</a></li>';
    //echo '<li class="nav-item"><a class="nav-link" href="#">'+$name+'</a></li>';
  }
  echo trim($nav_bar_menu);
}

function nav_bar()
{
  global $nav_items;
  $nav_bar_menu = '';
  foreach ($nav_items as $key => $name) {
    $nav_bar_menu .= '<p>neet</p>';
  }
  echo $nav_bar_menu;
}

function footer()
{
  global $websiteURL;
  echo "$websiteURL By Team Alpha! </br>";
  echo "Team Alpha: ";
}

?>
