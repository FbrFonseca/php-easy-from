<?php
include "connect.php";
session_start();

$name = "";
$surname = "";
$email = "";
$employeeID = "";
$holidayStart = "";
$holidayEnd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_SESSION["userID"];
    $surname = $_SESSION["surname"];
    $email = $_SESSION["email"];
    $employeeID = $_POST["employeeID"];
    $holidayStart = $_POST["holidayStart"];
    $holidayEnd = $_POST["holidayEnd"];

    $sql = "INSERT INTO form_table(name, surname, email, employeeID, holidayStart, holidayEnd) VALUES('$name', '$surname', '$email', '$employeeID', '$holidayStart', '$holidayEnd')";
    $result = $con->query($sql);

    $name = "";
    $surname = "";
    $email = "";
    $employeeID = "";
    $holidayStart = "";
    $holidayEnd = "";

    header("Location: userpage.php");
    exit;
}

?>