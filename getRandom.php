<?php

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
  if ($response == null){
    echo "Somethings gone wrong2."
  }
  else{
  echo $response['title'].'<br>';
  echo $response['year'].'<br>';
  echo '<img src=" '.$response['img'].' " alt="random">';
  }

?>
