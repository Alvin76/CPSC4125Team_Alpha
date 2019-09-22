<html>
 <head>
  <title>PHP Test page 2</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
 <a href="/index.php">Visit the home pageee.</a>
  <p>fucking hell i hate php !</p>
 </body>
 <?php require '/functions.php';
  echo $websiteURL;
 ?>
 <?php require 'functions.php';
 echo $websiteURL;
 ?>

 <?php include 'functions.php';
 echo "I have a $websiteURL .";
 ?>

 <!-- <p>fucking hell i hate php !</p> -->
</html>
