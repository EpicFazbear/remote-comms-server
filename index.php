<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field

//get the data
$json = file_get_contents("php://input");

//convert the string of data to an array
$data = json_decode($json, true);

//output the array in the response of the curl request
print_r($data);

//	if (empty($name)) {
//		echo "Name is empty";
//	} else {
//		echo $name;
//	}
} else {
	echo "Not POST.";
};
?>