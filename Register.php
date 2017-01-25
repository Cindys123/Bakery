<?php
$con = mysqli_connect("cindysbakery.000webhostapp.com","id553952_cindysbakery","09085139083","id553952_loginregistercindys");


$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$birthday = $_POST["birthday"];
$mgender = $_POST["mgender"];
$fgender = $_POST["fgender"];

$statement = mysqli_prepare($con,"INSERT INTO cindy (name, email,password, birthday, fgender, mgender) VALUES(?,?,?,?,?)");
mysqli_stmt_bind_param($statement, "siss", $name, $password,$email, $birthday, $mgender,$fgender);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);
?>
