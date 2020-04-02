<form action="php-forms.php" method="post">
    Last Name: <input name="userLastName" type="text" />
    First Name: <input name="userFirstName" type="text" />
    <input name="submit" type="submit" value="Submit"/>
</form>
<br>
<?php
  $myfile2 = fopen("Edd.txt", "r");
  echo fread($myfile2, filesize("Edd.txt"));
  fclose($myfile2);
  $myfile = fopen("Edd.txt", "w");
  fwrite($myfile, "Hello! Hello! Hello! Hello! How Low?");
  fclose($myfile);
?>
