<!-- signup code for signup -->

<!-- first bring in the connection to the database -->
<?php
require_once "./connections.php";
$fname = $lname = $gender = $email = $password = '';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = md5($pwd);


// insert into table users
$sql = "INSERT INTO users (Fname, Lname, Gender, Email, Password) 
        VALUES ('$fname', '$lname', '$gender', '$email', '$password')";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: login.form.php");
} else {
    echo "Error" . $sql;
}
?>