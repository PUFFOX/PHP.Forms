<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>LOGIN</h2>
    <form action="task3.php" method="post">
        <label for ="login"> Login: </label>
        <input type= "text" id="login" name="login" required> <br><br>

        <label for ="password"> Password: </label>
        <input type= "password" id="password" name="password" required> <br><br>

        <button type="submit" name="loginBtn"> Log In </button>

        <br>
        <p> Registration <a href="register.php">Registration </a> </p>
    </form>
</body>
</html>