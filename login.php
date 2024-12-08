<?php
include("config.php");
session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $myname = mysqli_real_escape_string($db, $_POST['Name']);
    $mynumberofticket = mysqli_real_escape_string($db, $_POST['Numberofticket']);

    // Corrected SQL query (removed the extra $ sign)
    $sql = "SELECT * FROM login WHERE Name = '$myname' AND Numberofticket = '$mynumberofticket'";

    // Execute the query
    $result = mysqli_query($db, $sql);

    // Check if the query was successful
    if ($result === false) {
        die('Error executing query: ' . mysqli_error($db));
    }

    // Check the number of rows returned
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Correctly set the session variable
        $_SESSION['login_user'] = $myname;
        header("location: welcome.php");
    } else {
        // Show an error message if credentials are invalid
        echo "<script>alert('The name or Numberofticket you entered is invalid.'); window.location='index.php';</script>";
    }
}
?>
