<?php
$con = mysqli_connect("localhost","id553952_cindysbakery","09085139083","id553952_cindysbakery");


$name = $_POST["name"];
$address = $_POST["address"];
$number = $_POST["number"];
$email = $_POST["email"];

$statement = mysqli_prepare($con,"INSERT INTO user (name, address,email,number) VALUES(?,?,?,?)");
mysqli_stmt_bind_param($statement, "siss", $name, $address, $number, $email);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $user_id, $name, $number, $email, $address);

$response = array();
$response["success"] = true;

echo json_decode($response);
?>