
<!-- connections to the database -->
<?php

$conn = mysqli_connect("localhost", "root", "", "signup");
// server = localhost
// username = root
// password = null
// database name = signup

if (!$conn) {
    echo "Connection to database failed";
}
?>
