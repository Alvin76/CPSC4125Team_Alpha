<?php


// Defining global Variables
$color='red';
$car='BMW';
$websiteURL = 'https://test-app-ericsson.herokuapp.com/';
$authors = array('James_Ericsson');
$nav_items = array('Home Page','About Us', 'Contact Us', 'Movie Search');
$urls = array('Home.php', 'aboutus.php', 'contactus.php', 'moviesearch.php');

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


function head(){
  $head = '<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Required PHP Functions -->

    <title>Movie Search</title>
  </head>';
  echo $head;
}



function getTodaysComic(){
$url = "http://www.omdbapi.com/?apikey=ef40b1dc&s=batman";
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

echo $response['Title'].'<br>';
echo $response['Year'].'<br>';
echo '<img src=" '.$response['Img'].' " alt="test">';
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
  echo '<p>The website ' . $websiteURL . ' is By Taylor Woods, Adam Davies, Evan, James Ericsson</p>';
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
