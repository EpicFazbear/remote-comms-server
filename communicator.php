<head><title>Communications Directory</title></head>
<?php
// https://discord.com/api/webhooks/715271351354523719/lrtxhDV--CTyuWR3K1xDyosSCZw-HQHO7kSS1e-qMrhaRkwKnOR-h7ACjMbELy8Ojnsl
$stored = "Hello! Hello! Hello! Hello! How Low?";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$recieved = json_decode(file_get_contents("php://input"));

	if (empty($recieved["content"])) {
		if (!empty($recieved["command"])) {
			$stored = $recieved["command"];
			echo "Ran command.";
		} else {
			echo "Invalid parameters.";
		};
	} else { // Commands are not Adonis Commands, but instructions for the server scripts to do stuff (such as stop for a bit, etc.)
//		if (gettype($stored) != "array") {
//			$stored = [];
//		};
//		array_push($stored, $json);
//		echo $stored;

		$stored = $json;
	};

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
//	if (gettype($stored) == "array") { // Someone could theoretically hijack this system by spamming GET requests here and constantly clear the buffer
//		echo json_encode($stored); // Before server scripts could ever read them..
//		$stored = [];
//	} else {
		echo $stored;
//	};
} else {
	echo "Invalid parameters.";
};
// Very far off future: Server scripts authenticate with a random GUID, and the communicator creates a secure and
// separate buffer for them. When that server shuts down, it sends a message to the server so the GUID gets removed.
?>