<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	// $data = json_decode(file_get_contents("php://input"));
	// $name = $data["content"];
	print_r($_POST);
//	if (empty($name)) {
//		echo "Name is empty";
//	} else {
//		echo $name;
//	}
};
?>