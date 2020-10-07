<!-- signup code for login -->

<!-- first bring in the connection to the database -->
<?php
require_once "./connections.php";
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = md5($pwd);


// insert into table users
$sql = "SELECT FROM users WHERE Email = '$email' AND Password = '$password'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['Id'];
        $email = $row['Email'];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
    }
    header("Location: ../php/homepage.php");
} else {
    echo "Invalida Email or Password";
}
?>