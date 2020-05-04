<head><title>EpicFazbear's Remote Admin Site</title></head>
<?php
$stored = "Hello! Hello! Hello! Hello! How Low?";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$recieved = json_decode(file_get_contents("php://input"));

	if (empty($recieved["content"])) {// Also check if theres a ["command"]
		echo "Invalid parameters."; // Probably log these commands as well
	} else { // Commands are not Adonis Commands, but instructions for the server scripts to do stuff (such as stop for a bit, etc.)
		if (gettype($stored) != "array") {
			$stored = {};
		};
		array_push($stored, $json)
		echo $stored;
//		$file = fopen("Edd.txt", "w");
//		fwrite($file, $recieved);
//		fclose($file);
//		echo readfile("Edd.txt");
	};

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (gettype($stored) == "array") {
		echo json_encode($stored);
	} else {
		echo $stored;
	};
	$stored = {};
} else {
	echo "Invalid parameters.";
};
// make the buffer ($stored) a table that stores all the messages sent until the server script GetRequests the php, in which
// all of the data is sent, and the buffer is reset
// if the buffer == DEFAULT, then server script doesn't do anything
?>