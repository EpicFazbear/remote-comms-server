<?php
  $data = $_POST['text'];
  $myfile = fopen("Edd.txt", "w");
  fwrite($myfile, $data);
  fclose($myfile);
  $myfile2 = fopen("Edd.txt", "r");
  echo fread($myfile2, filesize("Edd.txt"));
  fclose($myfile2);
?>
