<?php include "connect.php";

$name = "";
$email = "";
$subject = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_table(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
    $result = $con->query($sql);

    $name = "";
    $email = "";
    $subject = "";
    $message = "";

    header("Location: contact.php");
    exit;
}
