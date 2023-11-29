<?php include 'connect.php';

if (isset($_GET["formID"])) {
    $formID = $_GET["formID"];

    $sql = "DELETE FROM student WHERE stuId = '$formID' ";
    mysqli_query($con, $sql);
}

header("Location: userpage.php");
exit;
?>
