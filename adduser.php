<?php include "connect.php";

$name = "";
$surname = "";
$email = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user_table(name, surname, email, password) VALUES('$name', '$surname', '$email', '$password')";
    $result = $con->query($sql); //rever

    $name = "";
    $surname = "";
    $email = "";
    $password = "";

    header("Location: adduser.php");
    exit;
}

?>

<!-- <!DOCTYPE html>
<html lang="en">

<body>
    <form method="POST">

        <div>
            <h3>Name</h3>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        
        <div>
            <h3>Surname</h3>
            <input type="text" name="surname" value="<?php echo $surname; ?>">
        </div>

        <div>
            <h3>Email</h3>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>

        <div>
            <h3>Password</h3>
            <input type="text" name="password" value="<?php echo $password; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

    
</body>
</html> -->