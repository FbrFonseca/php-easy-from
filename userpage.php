<!-- user area, needs: form maker, forms filled -->
<?php
include "connect.php";
include "credentials.php";
include "addform.php";


// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['userID']) || empty($_SESSION['userID'])) {
    header('Location: login.php');
    exit;
}

?>

<?php include "head.php" ?>
<?php include "header.php" ?>

<section class="">
    <div class="d-flex justify-content-between align-items-center text-white py-5 my-5 relative">
        <div class="col-4 h-75">

            <form class="px-5" method="POST">
                <h3>New Holiday Form</h3>

                <div class="">
                    <input type="text" class="form-control" name="employeeID" value="<?php echo $employeeID; ?>" />
                </div>
                <p>Employee ID</p>


                <div>
                    <input Type="date" class="form-control" name="holidayStart" />
                </div>
                <p>Starting date</p>
                <div>
                    <input Type="date" class="form-control" name="holidayEnd" />
                </div>
                <p>End date</p>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="px-5 col-4 h-75">

            <table class="table">
                <h3>Previous Forms</h3>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Start</th>
                        <th>End</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM form_table WHERE userID = {$_SESSION['userID']}";
                    $result = $con->query($sql);

                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td> <?= $row['formID']; ?> </td>
                            <td> <?= $row['holidayStart']; ?> </td>
                            <td> <?= $row['holidayEnd']; ?> </td>
                            <td><a class="btn btn-danger" href="deleteform.php?formID=<?= $row['formID']; ?>">Delete</a></td>
                        <?php
                    }
                        ?>
                <tbody>
            </table>

        </div>
    </div>
    <form action="logout.php" action="POST">
        <button type="submit" class="btn btn-danger mx-5 my-1">Logout</button>
    </form>
</section>

<?php include "footer.php" ?>