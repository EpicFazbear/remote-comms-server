<head><title>EpicFazbear's Remote Admin Site</title></head>
<?php
$stored = "Hello! Hello! Hello! Hello! How Low?";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$json = file_get_contents("php://input");
	$content = json_decode($json, true)["content"];

	if (empty($content)) {// Also check if theres a ["command"]
		echo "Invalid parameters."; // Probably log these commands as well
	} else { // Commands are not Adonis Commands, but instructions for the server scripts to do stuff (such as stop for a bit, etc.)
		$stored = $json;
		echo $stored;
//		$file = fopen("Edd.txt", "w");
//		fwrite($file, $json);
//		fclose($file);
//		echo readfile("Edd.txt");
	};

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
	echo $stored;
} else {
	echo "Invalid parameters.";
};
// make the buffer ($stored) a table that stores all the messages sent until the server script GetRequests the php, in which
// all of the data is sent, and the buffer is reset
// if the buffer == DEFAULT, then server script doesn't do anything
?>