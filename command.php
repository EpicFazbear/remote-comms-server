<head><title>EpicFazbear's Remote Admin Site</title></head>
<?php // This is reserved for the bot and the server scripts for command communication.
$stored = "Hello! Hello! Hello! Hello! How Low?";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$json = file_get_contents("php://input");
	$content = json_decode($json, true)["content"];

	if (empty($content)) {
		echo "Invalid parameters.";
	} else {
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
?>