<?php 
    include "navigation.php";
    include "../includes/dbh.inc.php";
?>


<form method="post" action="../includes/gymImages.inc.php" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Save image' name='but_upload'>
</form>
