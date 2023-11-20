<?php 
include "connect.php";


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$query = "SELECT * FROM user_table";
$result = $con->query($query);

$data = $result->fetch_all(MYSQLI_ASSOC);

//echo json_encode($data);


$con->close();
?>

<html lang="en">
    <?php include "head.php"; ?>
    <?php include "body.php"; ?>
</html>