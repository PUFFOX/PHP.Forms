<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Змінні з логіном та паролем для перевірки
$correctLogin = "user";
$correctPassword = "password";

// Перевірка, чи було натиснуто кнопку "Увійти"
if (isset($_POST['loginBtn'])) {
    $enteredLogin = $_POST['login'];
    $enteredPassword = $_POST['password'];

    // Перевірка, чи введені дані співпадають з коректними
    if ($enteredLogin === $correctLogin && $enteredPassword === $correctPassword) 
    {
        // Якщо логін та пароль вірні, перенаправлення на основну сторінку з повідомленням
        header("Location: main_page.php");
        exit();
    } 
    else {
        // Якщо логін або пароль не вірні, виведення повідомлення про помилку
        echo "<p style='color: red;'>Неправильний логін або пароль. Спробуйте ще раз.</p>";
    }
}
?>
</body>
</html>