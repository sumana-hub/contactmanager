<!DOCTYPE html>
<html>
    <head>
        <title>Contact Manager - Login</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
    </head>
    <body>
        <?php include("header.php"); ?>
        <main>
            <h2>Login</h2>

            <form action="login.php" method="post">
                <div id="data">
                    <label>User Name:</label>
                    <input type="text" name="user_name" /><br />

                    <label>Password:</label>
                    <input type="password" name="password" /><br />

                </div>

                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Login" /><br />
                </div>

            </form>
            
            <p><a href="registration_form.php">Register</a></p>
            
        </main>
        <?php include("footer.php"); ?>
    </body> 
</html>