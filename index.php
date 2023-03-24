<?php
session_start();

// проверяем, отправлены ли данные из формы
if(isset($_POST["login"])) {
    // создаём объект пользователя
    $user = new User();

}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<!-- проверяем, записана ли ошибка и отображаем -->
<?php if(isset($error)) { ?>
    <p><?= $error; ?></p>
<?php } ?>
<form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>