<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['content'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>