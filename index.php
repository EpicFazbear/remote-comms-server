<?php
  $data = $_POST['text'] or "INVALID REQUEST >:(";
  $myfile = fopen("Edd.txt", "a");
  fwrite($myfile, "\n". $data);
  fclose($myfile);
  $myfile2 = fopen("Edd.txt", "r");
  echo fread($myfile2, filesize("Edd.txt"));
  fclose($myfile2);
?>
