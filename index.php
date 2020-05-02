<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	// $data = json_decode(file_get_contents("php://input"));
	// $name = $data["content"];
	$obj2 = json_decode($_REQUEST, true);
	print_r($obj2);
	print("charlie");
//	if (empty($name)) {
//		echo "Name is empty";
//	} else {
//		echo $name;
//	}
};
?>