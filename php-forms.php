<?php
    echo "Hello, ".$_POST['userFirstName']." ". $_POST['userLastName'];
?>
<br>
<?php
  $myfile2 = fopen("Edd.txt", "r");
  echo fread($myfile2, filesize("Edd.txt"));
  fclose($myfile2);
  $myfile = fopen("Edd.txt", "w");
  fwrite($myfile, "When the lights are out, it's less dangerous!");
  fclose($myfile);
?>
