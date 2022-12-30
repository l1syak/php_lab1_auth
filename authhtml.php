<!DOCTYPE html>
<html>

<title>Форма авторизации</title>

<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></head>
<link rel="stylesheet" href ="css/style.css">
<body>

<div class="container mt-4">
<!--    div - формочка, в которой будет все поля ввода, кнопки и слова-->
    <?php
    if ($_COOKIE['user'] == ''):
    ?>
    <h1>Форма авторизации</h1>
    <form action="/auth.php" , method="post">
<!--        action - файл, который будет обрабатывать все формы ниже-->
        <input type="text", class="form-control", name="login", id="login", placeholder="Введите логин">
        <br>
        <input type="password", class="form-control", name="password", id="password", placeholder="Введите пароль">
        <br>
        <button class="btn btn-success" type="submit">Войти</button>
        <a href="registerhtml.php">Нет аккаунта?</a>
    </form>
    <?php else: ?>
    <p>
    Привет, <?=$_COOKIE['user']?>. Для того, чтобы выйти, нажми <a href="exit.php">меня</a>.
    </p>
    <?php endif; ?>

</div>

</body>
</html>
