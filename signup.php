<?php

$mysqli = new mysqli('localhost', 'root', 'admin', 'anime-blog');

if(mysqli_connect_errno()) {
    printf('Соединение не установлено', mysqli_error());
    exit();
}


$mysqli->set_charset('utf8');



$query = $mysqli->query('SELECT * FROM signup');

$name = mysqli_real_escape_string($mysqli, $_REQUEST['name']);
$email = mysqli_real_escape_string($mysqli, $_REQUEST['email']);
$password = mysqli_real_escape_string($mysqli, $_REQUEST['password']);

if($query != '') {
$query = "INSERT INTO signup VALUES(null, '$name', '$email', '$password')";
}



if(mysqli_query($mysqli, $query)){
echo "Записи успешно добавлены.";
} else{
echo "ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
}


$mysqli->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/sign-up.css">
    <script src="js/script.js"></script>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container _container">
                <div class="header__body">
                    <a href="index.php" class="header__logo">
                        <img src="img/header/Logo.png" alt="Logo">
                    </a>
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__list">
                            <li><a href="index.php" class="header__link">Home</a></li>
                            <li><a href="" class="header__link">Connect</a></li>
                            <li><a href="signup.php" class="header__link sign-up _active">Sign up</a></li>
                            <li><a href="login.php" class="header__link login">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="page">
            <section class="sign">
                <div class="sign__content _container-signlog">
                    <div class="content__form2">
<<<<<<< HEAD
                        <form id="form2" method="post" action="signup.php">
                            <div class="form2__item">
                                <label for="" class="form__label">Name</label>
                                <input type="text" name="name" class="name" placeholder="Enter your Name"/>
                            </div>
                            <div class="form2__item">
                                <label for="" class="form__label">Email</label>
                                <input type="text" name="email" class="email" placeholder="Enter your Email" />
                            </div>
                            <div class="form2__item">
                                <label for="" class="form__label password">Password</label>
                                <input type="password" name="password" class="password" placeholder="Enter your Password" />
=======
                        <form action="" method="post" class="js-form" novalidate>
                            <div class="form2__item">
                                <label for="" class="form__label">Name</label>
                                <input type="text" name="name" class="form__input js-input" placeholder="Enter your Name"/>
                            </div>
                            <div class="form2__item">
                                <label for="" class="form__label">Email</label>
                                <input type="email" name="email" class="form__input js-input js-input-email" placeholder="Enter your Email" />
                            </div>
                            <div class="form2__item">
                                <label for="" class="form__label password">Password</label>
                                <input type="password" name="password" class="form__input js-input js-input-password" placeholder="Enter your Password" />
>>>>>>> php
                            </div>
                            <div class="form2__button">
                                <button type="submit" name="submit" class="button__send">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
<script src="js/form.js"></script>
</html>