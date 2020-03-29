<?php
  $myfile = fopen("Edd.txt", "a");
  fwrite($myfile, "\nHello! Hello! Hello! Hello! How Low?");
  fclose($myfile);
  $myfile2 = fopen("Edd.txt", "r");
  echo fread($myfile2, filesize("Edd.txt"));
  fclose($myfile2);
  //echo("I am learning PHP");
  //header("Location: index.html");
?>
