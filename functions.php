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


function vehicle()
{
  global $color, $car;
  echo "I have two $color $car.";
}

?>
