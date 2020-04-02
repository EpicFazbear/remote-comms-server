<?php
  $data = $_POST;
  echo($data);
  $myfile = fopen("Edd.txt", "a");
  fwrite($myfile, "\n". $data);
  fclose($myfile);
?>
