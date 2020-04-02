<?php
  $data = $_POST;
  echo(count($data));
  $myfile = fopen("Edd.txt", "w");
  fwrite($myfile, $data);
  fclose($myfile);
?>
