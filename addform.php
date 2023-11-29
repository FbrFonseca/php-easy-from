<?php
include "connect.php";
session_start();//check use of sessions

$userID = "";
$employeeID = "";
$holidayStart = "";
$holidayEnd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userID = $_SESSION["userID"];
    $employeeID = $_POST["employeeID"];
    $holidayStart = $_POST["holidayStart"];
    $holidayEnd = $_POST["holidayEnd"];

    $sql = "INSERT INTO form_table(userID, employeeID, holidayStart, holidayEnd) VALUES('$userID', '$employeeID', '$holidayStart', '$holidayEnd')";
    $result = $con->query($sql);

    
    $userID = "";
    $employeeID = "";
    $holidayStart = "";
    $holidayEnd = "";

    header("Location: userpage.php");
    exit;
}

?>