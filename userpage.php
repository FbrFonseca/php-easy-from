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

<section class="">
    <div class="d-flex justify-content-around align-items-center text-white py-5 my-5">
        <div class="py-5">
            <h3>New Form</h3>
            <form class="" method="POST">

                <div class="">
                    <input type="text" class="form-control" placeholder="Your Name *" name="name" value="<?php echo $name; ?>" />
                </div>

                <div class="">
                    <input type="text" class="form-control" placeholder="Your Surname *" name="surname" value="<?php echo $surname; ?>" />
                </div>

                <div class="">
                    <input type="text" class="form-control" placeholder="Your Email *" name="email" value="<?php echo $email; ?>" />
                </div>

                <div class="">
                    <input type="text" class="form-control" placeholder="Your Password *" name="password" value="<?php echo $password; ?>" />
                </div>

                <button type="submit" class="btnSubmit">Submit</button>
            </form>
        </div>
        <div>
            <h3>My Applications</h3>
            <p>* 1 form</p>
            <p>* 1 form</p>
            <p>* 1 form</p>
            <p>* 1 form</p>
        </div>
    </div>
</section>

<?php include "footer.php" ?>