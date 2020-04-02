<?php
  header('Content-Type: application/json');
  $data = $_POST["content"];
  echo($data);
  $myfile = fopen("Edd.txt", "w");
  fwrite($myfile, $data);
  fclose($myfile);
?>
