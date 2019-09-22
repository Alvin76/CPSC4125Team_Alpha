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


function vehicle()
{
  global $color, $car;
  echo "I have two $color $car.";
}


function footer()
{
  global $websiteURL;
  echo "$websiteURL By Team Alpha! </br>";
  echo "Team Alpha: ";
}

?>
