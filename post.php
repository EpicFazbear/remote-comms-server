<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the data
	$json = file_get_contents("php://input");

	// Convert the string of data to an array
	$data = json_decode($json, true);
	$content = $data["content"];

	if (empty($content)) {
		echo "Invalid parameters.";
	} else {
		// Write to the text file
		$file = fopen("Edd.txt", "w")
		echo $content;
		fwrite($file, $content);
		fclose($file);
		echo readfile("Edd.txt");
	};

} else {
	echo "Invalid parameters.";
};
?>