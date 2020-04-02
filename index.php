<?php
    echo "Hello, ".$_POST['userFirstName']." ". $_POST['userLastName'];
?>
<form action="php-forms.php" method="post">
    Last Name: <input name="userLastName" type="text" />
    First Name: <input name="userFirstName" type="text" />
    <input name="submit" type="submit" value="Submit"/>
</form>
