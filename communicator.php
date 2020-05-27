<?php
// https://discord.com/api/webhooks/715271351354523719/lrtxhDV--CTyuWR3K1xDyosSCZw-HQHO7kSS1e-qMrhaRkwKnOR-h7ACjMbELy8Ojnsl
$stored = "Hello! Hello! Hello! Hello! How Low?";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$recieved = file_get_contents("php://input");
	$decoded = json_decode($recieved);
	print($decoded);

	if (!empty($decoded["content"])) {
		$stored = $recieved;
//		if (gettype($stored) != "array") {
//			$stored = [];
//		};
//		array_push($stored, $json);
//		echo $stored;
	} else {
		if (!empty($decoded["command"])) { // Commands meant for the server itself
			$stored = $decoded["command"];
			echo "Ran command.";
		} else {
			echo "Invalid parameters.";
		};
	};

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
//	if (gettype($stored) == "array") { // Someone could theoretically hijack this system by spamming GET requests here and constantly clear the buffer before server scripts could ever read them..
//		echo json_encode($stored);
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