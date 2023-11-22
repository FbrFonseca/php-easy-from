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

//separar e organizar os codigos
?>

<html lang="en" class="overflow-y-scroll">
    <?php include "head.php"; ?>
    <?php include "body.php"; ?>
    <?php include "footer.php"; ?>
</html>