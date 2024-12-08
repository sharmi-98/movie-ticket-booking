<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
	<link rel="stylesheet" href="style.css">
   </head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" id="Name" name="Name" required>
        </div>
        <div class="form-group">
            <label for="Numberofticket">Numberofticket:</label>
            <input type="text" id="Numberofticket" name="Numberofticket" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Login">
        </div>
    </form>
</div>

</body>
</html>