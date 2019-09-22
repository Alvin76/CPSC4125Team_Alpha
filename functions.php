<?php
require "/config.php";

  $websiteURL = "https://test-app-ericsson.herokuapp.com/"

  function footer(){
    echo "<footer>"
      echo "This is a footer</br>"
    echo "</footer>"
  }


<footer>
    <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
</footer>
 ?>
