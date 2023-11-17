<?php include "connect.php";
include "head.php";

// con check
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// query data from db to a JSON
$query = "SELECT * FROM user_table";
$result = $con->query($query);

$data = $result->fetch_all(MYSQLI_ASSOC);

//echo json_encode($data);


// Close the database connection
$con->close();
?>

<!-- check better way to assemble the app -->
<html lang="en">

<body>
    <?php include "header.php"; ?>
    <main class="text-white">
        <?php echo json_encode($data); ?>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>