<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	// $data = json_decode(file_get_contents("php://input"));
	// $name = $data["content"];
	$result = $_REQUEST['rawRequest'];
	$obj = json_decode($result, true);
	$obj2 = json_decode($_REQUEST, true);
	print($obj);
	print($obj2);
//	if (empty($name)) {
//		echo "Name is empty";
//	} else {
//		echo $name;
//	}
};
?>