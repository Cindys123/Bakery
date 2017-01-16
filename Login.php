<?php
$con = mysqli_connect("localhost","id553952_cindysbakery","09085139083","id553952_cindysbakery");

$number = $_POST["number"];
$email = $_POST["email"];

$statement = mysqli_prepare($con,"SELECT * from user where number = ? and email = ?");
mysqli_stmt_bind_param($statement, "ss", $number, $email);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $user_id, $name, $number, $email, $address);

$response = array();
$response["success"] = false;

while(mysqli_stmt_fetch($statement)){
	$response[""] = true;
	$response["name"] = $name;
	$response["number"] = $number;
	$response["address"] = $address;
	$response["email"] = $email;
}
echo json_decode($response);
?>