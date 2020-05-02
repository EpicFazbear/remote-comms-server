<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	// $data = json_decode(file_get_contents("php://input"));
	// $name = $data["content"];
	echo file_get_contents("php://input");
//	if (empty($name)) {
//		echo "Name is empty";
//	} else {
//		echo $name;
//	}
};
?>