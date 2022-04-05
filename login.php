<?php

$mysqli = new mysqli('localhost', 'dan', '', 'anime-blog');

if(mysqli_connect_errno()) {
    printf('Соединение не установлено', mysqli_error());
    exit();
}


$mysqli->set_charset('utf8');



$query = $mysqli->query('SELECT * FROM login');

$email = mysqli_real_escape_string($mysqli, $_REQUEST['email']);
$password = mysqli_real_escape_string($mysqli, $_REQUEST['password']);

if($query != '') {
$query = "INSERT INTO login VALUES(null, '$email', '$password')";
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
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
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
                            <li><a href="signup.php" class="header__link sign-up">Sign up</a></li>
                            <li><a href="login.php" class="header__link login _active">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="page">
            <section class="sign">
                <div class="sign__content _container-signlog">
                    <div class="content__form2">
                        <form id="form2" method="post" action="login.php">
                            <div class="form2__item">
                                <label for="" class="form__label">Email</label>
                                <input type="text" name="email" class="email" value="" placeholder="Enter your Email" />
                            </div>
                            <div class="form2__item">
                                <label for="" class="form__label password">Password</label>
                                <input type="password" name="password" class="password" placeholder="Enter your Password" />
                            </div>
                            <div class="form2__button">
                                <button type="submit" name="submit" class="button__send">Login</button>
                            </div>
                        </form>
                        <div id="results"></div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>