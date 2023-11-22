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


<?php include "head.php"; ?> 
<?php include "header.php"; ?>

<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>This is a simpleRegister Form made using Boostrap.</p>
        </div>
        
        <div class="form-content">
            <div class="row">
                <div class="col-md-6">  
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone Number *" value=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Password *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Confirm Password *" value=""/>
                    </div>
                </div>
            </div>
            <button type="button" class="btnSubmit">Submit</button>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>










<!-- <div>
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
</div> -->