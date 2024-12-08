<?php
// Start the session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Name = $_POST["Name"];
    $Numberofticket = $_POST["Numberofticket"];

    // Your authentication logic goes here
    // Example: Check if username and password match a record in your database
    if ($Name === "your_Name" && $Numberofticket=== "your_Numberofticket") {
        // Authentication successful, redirect to enrollment page
        $_SESSION["Name"] = $Name;
        header("Location: enrollment.php");
        exit();
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: login.html?error=invalid_credentials");
        exit();
    }
}
?>
