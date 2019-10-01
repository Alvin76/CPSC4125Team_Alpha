<?php


// Defining global Variables
$color='red';
$car='BMW';
$websiteURL = 'https://teamalpharules.herokuapp.com';
$authors = array('James', 'Adam', 'Taylor', 'Evan');
$nav_items = array('Home Page', 'Todays Comic', 'Random Comic');
$urls = array('Home.php', 'todays.php', 'random.php');

function noCache(){
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
}

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

function head(){
  $head = '<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Required PHP Functions -->

    <title>James Ericsson</title>
  </head>';
  echo $head;
}

// function curlFunction(){
//   // create curl resource
//   $ch = curl_init();
//
//   // set url
//   curl_setopt($ch, CURLOPT_URL, "https://xkcd.com/info.0.json");
//
//   //return the transfer as a string
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//
//   // $output contains the output string
//   $output = curl_exec($ch);
//
//   // close curl resource to free up system resources
//   curl_close($ch);
//   echo '<p>The website ' . $output . ' is By James Ericss</p>';
//   echo $output;
// }


function getTodaysComic(){
$url = "https://xkcd.com/info.0.json";
/**dont change
*/
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
/*dont change
*/

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
  /*dont change
  */

  echo $response['title'].'<br>';
  echo $response['year'].'<br>';
  echo '<img src=" '.$response['img'].' " alt="random">';

}


function getOMDBResult(){
  url = 'http://omdbapi.com/?apikey=ddbdfa64&s=%27iron%20man%27';
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
  /*dont change
  */

  // echo $response['title'].'<br>';
  // echo $response['year'].'<br>';
  // echo '<img src=" '.$response['img'].' " alt="random">';
  echo "neet";
//  echo $response['Search'];
}

function nav_bar()
{
  global $nav_items, $urls;

  $navbar = '<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="/dumpster.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Git Gud
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
  echo '<p>The website ' . $websiteURL . ' is By James Ericsson</p>';
  echo $footerclosetag;
}

function getRandom(){
  $randNumber = rand(0,2000);
  echo $randNumber;

}




// function echoRandom(){
//   echo getRandom();
// }

// function curler(){
//
// }

function newComic(){
  $message = "button pressed";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
