<?php include "connect.php";

$name = "";
$surname = "";
$email = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "socorro!";
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user_table(name, surname, email, password) VALUES('$name', '$surname', '$email', '$password')";
    $result = $con->query($sql); 

    $name = "";
    $surname = "";
    $email = "";
    $password = "";

    header("Location: login.php");
    exit;
}

?>