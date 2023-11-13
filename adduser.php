<?php include "connect.php";
include "head.php";

$name = "";
$surname = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];

    $sql = "INSERT INTO user_table(name, surname, email) VALUES('$name', '$surname', '$email')";
    $result = $con->query($sql);

    $name = "";
    $surname = "";
    $email = "";

    //header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
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
        <button type="submit" class="btn btn-primary">Primary</button>
    </form>

    
</body>
</html>