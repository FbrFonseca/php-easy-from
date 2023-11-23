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

<h3 class="py-5 mt-5"><?php echo $_SESSION['name'] ?></h3>

<div>
    <h1>Members</h1>
    <h2>Our Members</h2>
    <table>
        <tr>
            <th>ID:</th>
            <th>Name:</th>
            <th>Email:</th>
            <th>Phone:</th>
            <th>Actions:</th>
        </tr>

        <?php
        // Output data from the database
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['userID'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['surname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo '<td><a href="edit_member.php?id=' . $row['user_id'] . '">Edit</a> | <a href="delete_member.php?id=' . $row['user_id'] . '">Delete</a></td>';
            echo "</tr>";
        }
        ?>
    </table>
</div>
<?php
// Close the database connection
$con->close();
?>

<?php include "footer.php" ?>