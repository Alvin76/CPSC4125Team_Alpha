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
$nav_items = array('Home Page', 'Todays Comic', 'Random Comic');
$urls = array('Home.php', 'todays.php', 'random.php');

function config($key = '')
{
    $config = [
        'name' => 'Git Gud',
        'XKCDURL' => 'http://xkcd.com/info.0.json',
        'nav_bar' => [
          '' => 'Home',
          'Home'      => "Home Page",
          'random' => 'Random Comic',
          'todays' => 'Todays Comic'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}



function vehicle()
{
  global $color, $car;
  echo "I have two $color $car.";
}

//function nav_bar2()
//{
  //$nav_bar_menu = '';
//  $nav_items = config('nav_bar');
  //foreach ($nav_items as $uri => $name) {
    //$nav_bar_menu .= '<li class="nav-item"><a class="nav-link" href= "' . $name . '">'. $name .'</a></li>';
    //echo '<li class="nav-item"><a class="nav-link" href="#">'+$name+'</a></li>';

//  }
//  echo trim($nav_bar_menu);
//}

// function nav_bar2()
// {
//   global $nav_items;
//   $nav_bar_menu = '';
//   foreach ($nav_items as $key => $name) {
//     $nav_bar_menu .= '<li class="nav-item"><a class="nav-link" href= /"' . $name . '.php">'. $name .'</a></li>';
//   }
//   echo $nav_bar_menu;
// }

function nav_bar()
{
  global $nav_items;
  global $urls;

  for ($x = 0; $x <= sizeof($nav_items); $x++) {
    $nav_bar_menu .= '<li class="nav-item"><a class="nav-link" href= /"' . $url[$x] . '">'. $name[$x] .'</a></li>';
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
