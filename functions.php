
<?php

// Defining global Variables
$color='red';
$car='BMW';
$websiteURL = 'https://test-app-ericsson.herokuapp.com/';
$authors = array('James', 'Adam', 'Taylor', 'Evan');
$nav_items = array('Home Page', 'Todays Comic', 'Random Comic');
$urls = array('Home.php', 'todays.php', 'random.php');



// Sample function for interacting with.
// Notice the keyword global must be used before the variables can be accessed.
function vehicle()
{
  global $color, $car;
  echo "I have a $color $car.";
}

// This is the navbar function. If you look inside instead of using the foreach
// I do a for loop. This allows me to index my declared arrays by a posistion.
// I find this to be the more intutive method.
// If you look on the appending of $nav_bar_menu you can see the html
// that will be dynamically created on the site.
function nav_bar()
{
  global $nav_items, $urls;

  for ($x = 0; $x < sizeof($nav_items) ; $x++) {
    $nav_bar_menu .= '<li class="nav-item"><a class="nav-link" href= /' . $urls[$x] . '>'. $nav_items[$x] .'</a></li>';
  }
  echo $nav_bar_menu;
}

function footer()
{
  global $websiteURL;
  echo '<p> ' . $websiteURL . ' </p>';
  // echo "$websiteURL By Team Alpha! </br>";
  // echo "Team Alpha: ";
}

?>
