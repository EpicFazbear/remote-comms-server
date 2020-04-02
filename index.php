<?php
  $data = $_POST['text'];
  $myfile = fopen("Edd.txt", "w");
  fwrite($myfile, $data);
  fclose($myfile);
  echo json_encode($data);
?>
