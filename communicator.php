<head><title>EpicFazbear's Remote Admin Site</title></head>
<?php
$stored = "Hello! Hello! Hello! Hello! How Low?";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$recieved = json_decode(file_get_contents("php://input"));

	if (empty($recieved["content"])) {
		if (!empty($recieved["command"])) {
			$stored = $recieved["command"];
			echo "Ran command."; // Probably log these commands as well
		} else {
			echo "Invalid parameters.";
		};
	} else { // Commands are not Adonis Commands, but instructions for the server scripts to do stuff (such as stop for a bit, etc.)
		if (gettype($stored) != "array") {
			$stored = {};
		};
		array_push($stored, $json);
		echo $stored;
//		$file = fopen("Edd.txt", "w");
//		fwrite($file, $recieved);
//		fclose($file);
//		echo readfile("Edd.txt");
	};

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (gettype($stored) == "array") { // Someone could theoretically hijack this system by spamming GET requests here and constantly clear the buffer
		echo json_encode($stored); // Before server scripts could ever read them..
		$stored = {};
	} else {
		echo $stored;
	};
} else {
	echo "Invalid parameters.";
};
?>