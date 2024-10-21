<!DOCTYPE html>
<html>
    <head>
        <title>Contact Manager - Registration</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
    </head>
    <body>
        <?php include("header.php"); ?>
        <main>
            <h2>Register</h2>

            <form action="registration.php" method="post">
                <div id="data">
                    <label>User Name:</label>
                    <input type="text" name="user_name" /><br />

                    <label>Password:</label>
                    <input type="password" name="password" /><br />

                </div>

                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Register" /><br />
                </div>

            </form>
            
            <p><a href="login_form.php">Back to Login</a></p>
        </main>
        <?php include("footer.php"); ?>
    </body> 
</html>