<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$recieved = file_get_contents("php://input");
	$decoded = json_decode($recieved, true);

	if (!empty($decoded)) {
		$file = fopen("Edd.txt", "w");
		fwrite($file, $recieved);
		fclose($file);
		readfile("Edd.txt");
	} else {
		echo "Invalid parameters.";
	};

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
	readfile("Edd.txt", "r");
} else {
	echo "Invalid parameters.";
};
?>