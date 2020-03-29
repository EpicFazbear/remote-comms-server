<?php
  $myfile = fopen("Edd.txt", "r");
  echo fread($myfile, filesize("Edd.txt"));
  fclose($myfile);
  //echo("I am learning PHP");
  //header("Location: index.html");
?>
