<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
    <link rel="stylesheet" href="style.css">
	<style>
	/* General reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Email form container */
.email-form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Form styling */
.email-form {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 14px;
    margin-bottom: 5px;
    color: #555;
}

input, textarea {
    font-size: 16px;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    outline: none;
}

input:focus, textarea:focus {
    border-color: #007BFF;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Submit button styling */
.submit-btn {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
    <div class="email-form-container">
        <h2>Ticket sending detail</h2>
        <form action="submit_form.php" method="POST" class="email-form">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required placeholder="Your full name">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Your email address">

            <a href="confirm.php">Send Message</a>
        </form>
    </div>
</body>
</html>
