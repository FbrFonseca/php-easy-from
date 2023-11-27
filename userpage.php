<!-- user area, needs: form maker, forms filled -->
<?php
include "connect.php";
include "credentials.php";
include "addform.php";

session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['userID']) || empty($_SESSION['userID'])) {
    header('Location: login.php');
    exit;
}

?>

<?php include "head.php" ?>
<?php include "header.php" ?>

<section class="">
    <div class="d-flex justify-content-between align-items-center text-white py-5 my-5">
        <div class="py-5">
            
            <form class="px-5" method="POST">
                <h3>New Holiday Form</h3>

                <p>Employee ID</p>
                <div class="">
                    <input type="text" class="form-control" placeholder="Employee ID *" name="employeeID" value="<?php echo $employeeID; ?>" />
                </div>

                <p>Starting date</p>
                <div>
                    <input Type="date" class="form-control" name="holidayStart"/>
                </div>

                <p>End date</p>
                <div>
                    <input Type="date" class="form-control" name="holidayEnd"/>
                </div>

                <button type="submit" class="btnSubmit">Submit</button>
            </form>
        </div>

        <div class="px-5">

            <h3>My Applications</h3>

            <div>
            <p>* 1 form</p>
            <p>* 1 form</p>
            <p>* 1 form</p>
            <p>* 1 form</p>
            </div>

        </div>
    </div>
</section>

<?php include "footer.php" ?>