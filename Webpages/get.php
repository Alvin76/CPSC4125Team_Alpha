<!doctype html>
<html lang="en">
  <?php require '../Backend/functions.php';?>
  <?php noCache(); ?>
  
  <?php
   if(isset($_POST['search'])) {
    echo "success"
  } else {
    echo "fail";
  };
  ?>
</html>
