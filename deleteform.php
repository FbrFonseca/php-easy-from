<?php include 'connect.php';

if (isset($_GET["formID"])) {
    $formID = $_GET["formID"];

    $sql = "DELETE FROM form_table WHERE formID = '$formID' ";
    mysqli_query($con, $sql);
}

header("Location: userpage.php");
exit;
?>
