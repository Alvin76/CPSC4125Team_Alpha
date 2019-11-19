<?php
$websiteURL = 'https://team-alpha-web-site.herokuapp.com';
$authors = array('Adam_Daves' , 'James_Ericsson','Evan_Jones','Taylor_Woods');
$nav_items = array('About Us', 'Contact Us', 'OMDB Search');
$urls = array('Webpages/AboutUs.php', 'Webpages/contactUs.php', 'Webpages/omdb.php');


function noCache(){
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
}



function head(){
  $head = '<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="../CSS/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Required PHP Functions -->

    <title>Team Alpha</title>
  </head>';
  echo $head;
}

function nav_bar()
{
  global $nav_items, $urls;

  $navbar = '<nav class="navbar navbar-expand-lg">
    <!-- Image and text -->
    <nav class="navbar">
      <a class="navbar-brand" href="https://team-alpha-web-site.herokuapp.com">
        <img src="../Images/mystic.png" width="40" height="30" class="d-inline-block align-top" alt="">
        Alpha Alpacas
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
  echo '<div class="card text-center"><div class="card-footer"><small class="text-muted">The website https://team-alpha-web-site.herokuapp.com is by Team Alpha</small></div></div>';
}

function getMovies($search){
  // echo "start";
  $url = 'http://omdbapi.com/?apikey=ddbdfa64&s=%27'.$search;
  // echo gettype($search);
  echo "<p style=\"color:#0E0816\">".$url."</p>";
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
  $NumberOfElements = count($response['Search']);
  $imageURL = $response['Search'][$x]['Poster'];
  echo '<div class ="movie-wrapper">';
  for ($x = 0; $x < $NumberOfElements ; $x++) {
    // echo '<div class="box '.$x' ">';
     echo '<div class="box'.$x.'">';
     echo $response["Search"][$x]["Title"];
     // echo '<img src=" '.$response['Search'][$x]['Poster'].' " alt="No-Image-Available>';
     details($response["Search"][$x]["imdbID"]);
    echo '</div>';
  }
  echo '</div>';
//  echo $NumberOfElements;
//   echo "<div class='row justify-content-md-center'>";
//   for ($x = 0; $x < $NumberOfElements ; $x++) {
//     // details($response["Search"][$x]["imdbID"]);
//     echo "<div class='col-md-auto'>";
//     echo '<br>'.$response["Search"][$x]["Title"].'<br>';
//     echo '<img src=" '.$response['Search'][$x]['Poster'].' " alt="No-Image-Available>';
//     echo '</div>';
//     echo '</div>';
//     details($response["Search"][$x]["imdbID"]);
//     echo '<div class="row">';
//
// }
// echo "</div>";
// }
}


function details($movieID){
    $url = 'http://omdbapi.com/?apikey=ddbdfa64&i='. $movieID;
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
    echo "<div class='movie-details'>". $response["Plot"]. '</div>';
}
?>
