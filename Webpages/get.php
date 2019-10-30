<!--
?php
   if(isset($_POST['search'])) {
    echo "success"
  } else {
    echo "fail";
  };
   -->
<?php echo "hi";

if(isset($_POST['search'])) {
 echo $_POST['search'];
} else {
 echo "fail";
};
 ?>
