<!-- user area, needs: form maker, forms filled -->
<?php
include "connect.php";
include "adduser.php";
include "credentials.php";

session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['userID'])) {
    header('Location: login.php');
    exit;
}

?>

<?php include "head.php" ?>
<?php include "header.php" ?>

<section>
    <div class="d-flex justify-content-around align-items-center pt-5 mt-5 text-white">
        <div>New Form</div>
        <div>My Applications</div>
    </div>
</section>

<?php include "footer.php" ?>