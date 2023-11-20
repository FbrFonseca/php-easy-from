<!-- user area, needs: form maker, forms filled -->
<?php 
include "connect.php";

$query = "SELECT * FROM user_table";
$result = $con->query($query);

$data = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);
?>


