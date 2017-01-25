<?php
$con = mysqli_connect("cindysbakery.000webhostapp.com","id553952_cindysbakery","09085139083","id553952_loginregistercindys");

$email = $_POST["email"];
$password = $_POST["password"];

$statement = mysqli_prepare($con,"SELECT * from cindy where email = ? and password = ?");
mysqli_stmt_bind_param($statement, "ss", $email, $password);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $user_id, $name, $password,$email, $birthday, $mgender,$fgender);

$response = array();
$response["success"] = false;

while(mysqli_stmt_fetch($statement)){
	$response[""] = true;
	$response["name"] = $name;
	$response["password"] = $password;
	$response["email"] = $email;
	$response["birthday"] = $birthday;
	$response["mgender"] = $mgender;
	$response["fgender"] = $fgender;
}
echo json_decode($response);
?>
