<?php
  $myfile = fopen("Edd.txt", "r");
  echo fread($myfile,filesize("Edd.txt"));
  fclose($myfile);
?>
