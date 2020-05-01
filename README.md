# Remote Admin Testing
This is a branched off version of heavy dictator where I try and make a functional remote admin API .-.
- Reference: https://www.afterhoursprogramming.com/tutorial/php/post-and-get/

-- Todo: Make some commands that will control lots of the stuff
- Set the refresh rate
- Stop for X seconds
- Whitelist/blacklist certain users from using the bot
- Enable/disable the webhook

- Also, add it so that the bot doesn't count webhooks
- Also consider if multiple people speak in the same timeframe

- Older test code:
```
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

<?php
  //echo("I am learning PHP");
  //header("Location: index.html");
?>
```
