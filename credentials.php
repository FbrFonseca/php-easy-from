<?php 
include "connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //getting email and pass
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  //checking credentials
  $query = "SELECT userID, name, surname, email, password FROM user_table WHERE email = '$email'";
  $result = $con->query($query);

  //looking for only one account
  if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();

    //password check
    if ($password == $row["password"]) {

      $_SESSION["userID"] = $row["userID"];
      $_SESSION["name"] = $row["name"];
      $_SESSION["surname"] = $row["surname"];
      $_SESSION["email"] = $row["email"];


      header("Location: userpage.php");


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