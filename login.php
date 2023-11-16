<?php include "connect.php";
include "head.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //getting email and pass
    $email = $_POST["email"];
    $password = $_POST["password"];

    //checking credentials
    $query = "SELECT userID, email, password FROM user_table WHERE email = '$email'";
    $result = $con->query($query);

    //looking for only one account
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        //password check
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION["userID"] = $row["userID"];
            $_SESSION["email"] = $row["email"];
    
            header("location: index.php");
            exit();
        } else {
            $error = "Invalid login credentials.";
        }


    } else {
        $error =  "Wrong email.";
    }

    
}

$con->close();

?>

<html lang="en">

<body>
    <?php include "header.php"; ?>
    <main class="text-white">
        <h2>Login</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <label for="email">Email</label>
            <input type="text" name="email" id="email" required><br>

            <label for="password">Password</label>
            <input type="text" name="password" id="password" required><br>

            <input type="submit" value="login">

        </form>

        <?php
        if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>