<!-- user area, needs: form maker, forms filled -->
<?php 
include "connect.php";

session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header('Location: login.php');
    exit;
}


echo "voce esta logado, esta e a area do usuario"
?>


