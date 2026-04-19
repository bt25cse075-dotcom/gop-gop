<?php 
session_start();
include("config.php");
if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $selectedrole= $_POST["role"];
    $query = "SELECT * FROM login WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $login = mysqli_fetch_array($result);
   if($login && $login["password"] == $password && $login["role"] == $selectedrole){
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $login["name"];
        $_SESSION["role"] = $login["role"];
        $_SESSION["password"] = $password;
  $role = $_SESSION["role"];
if($selectedrole == "student") {
    header("location: http://localhost/gop-gop/dashboard2/");
    exit();
} else if($selectedrole == "faculty"){
    header("Location: http://localhost/gop-gop/login%20faculty/faculty.php");
    exit();

} else if($selectedrole == "admin"){
    header("Location: .../admin/dashboard.php");
    exit();
}
    }
    else{
        $error = "invalid email or password";

    }
}
?>