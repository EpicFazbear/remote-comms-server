<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	echo readfile("Edd.txt");
};
?>