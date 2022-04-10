<?php

$mysqli = new mysqli('localhost', 'root', 'admin', 'anime-blog');

    if(mysqli_connect_errno()) {
        printf('Соединение не установлено', mysqli_error());
        exit();
    }


$mysqli->set_charset('utf8');



$query = $mysqli->query('SELECT * FROM subscribe');

$emailSub = mysqli_real_escape_string($mysqli, $_REQUEST['email__sub']);

if($query != '') {
    $query = "INSERT INTO subscribe VALUES(null, '$emailSub')";
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
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home-page.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
    <script src="slick/slick.min.js"></script>
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
                            <li><a href="index.php" class="header__link _active">Home</a></li>
                            <li><a href="" class="header__link">Connect</a></li>
                            <li><a href="signup.php" class="header__link sign-up">Sign up</a></li>
                            <li><a href="login.php" class="header__link login">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="page">
            <section class="welcome">
                <div class="welcome__content">
                    <div class="content__info">
                        <div class="content__title">Welcome to <br> Gates</div>
                        <div class="content__text">Get the latest news on your favourite mangas, anime and <br> manhwa around the world!</div>
                        <div class="content__form form">
                            <form action="" method="post" class="js-form" novalidate>
                                <button class="form__button" type="submit" name="submit">SUBSCRIBE</button>
                                <input type="email" name="email__sub" class="form__input js-input js-input-email" placeholder="Enter your email">
                                <button class="form__ico" type="submit" name="submit"><img src="img/ico/Group 4.png" alt=""></button> 
                            </form>
                        </div>
                    </div>
                    <div class="content__category">
                        <ul class="content__item">
                            <li><a href="" class="content__link">Action</a></li>
                            <li><a href="" class="content__link">Comedy</a></li>
                            <li><a href="" class="content__link">Drama</a></li>
                            <li><a href="" class="content__link">Military</a></li>
                            <li><a href="" class="content__link">Fantasy</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="new">
                <div class="new__content _container">
                    <h3 class="new__title title">New & Trendly</h3>
                    <div class="new__rows">
                        <div class="new__row">
                            <div class="row__items">
                                <a href="" class="row__img">
                                    <img src="img/home/Rectangle 39.png" alt="">
                                </a>
                                <div class="row__item">
                                    <div class="row__info">Fantasy <span>· 1 Month Ago</span></div>
                                    <div class="row__title"><a href="">Akame Ga Kill: Season finale</a></div>
                                    <div class="row__text">The CSS Grid Layout Module offers a <br> grid-based layout system, with rows and <br> columns, making it easier to design web pages <br> without having to use floats and positioning.</div>
                                    <div class="row__under under">
                                        <div class="under__read">
                                            <span>12 Min Read</span>
                                        </div>
                                        <div class="under__full">
                                            <a href="attack-on-titans.html"><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="new__row">
                            <div class="row__items">
                                <div class="row__item">
                                    <div class="row__info">Fantasy <span>· 1 Month Ago</span></div>
                                    <div class="row__title"><a href="attack-on-titans.html">Attack On Titans</a></div>
                                    <div class="row__text">The CSS Grid Layout Module offers a <br> grid-based layout system, with rows and <br> columns, making it easier to design web pages <br> without having to use floats and positioning.</div>
                                    <div class="row__under under">
                                        <div class="under__read">
                                            <span>12 Min Read</span>
                                        </div>
                                        <div class="under__full">
                                            <a href="attack-on-titans.html"><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="attack-on-titans.html" class="row__img">
                                    <img src="img/home/Rectangle 42.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="trend">
                <div class="trend__container _container">
                    <div class="trend__headline">
                        <h3 class="headline__title title">Now Trending</h3>
                        <div class="headline__btns">
                            <button class="headline__btn-prev"><img src="img/ico/arrow-left.png" alt=""></button>
                            <button class="headline__btn-next"><img src="img/ico/arrow-right.png" alt=""></button>
                        </div>
                    </div>
                    <div class="new__slider">
                        <div class="slider__item">
                            <a href="attack-on-titans.html" class="item__link">
                                <img src="img/home/Rectangle 42-1.png" alt="">
                            </a>
                            <div class="item__info">
                                Fantasy<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href="attack-on-titans.html"><h4>Attack On Titans</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href="attack-on-titans.html"><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <a href="" class="item__link">
                                <img src="img/home/Rectangle 33.png" alt="">
                            </a>
                            <div class="item__info">
                                History<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href=""><h4>Dr. Stone</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href=""><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <a href="" class="item__link">
                                <img src="img/home/Rectangle 34.png" alt="">
                            </a>
                            <div class="item__info">
                                Drama<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href=""><h4>Second Chance</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href=""><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <a href="" class="item__link">
                                <img src="img/home/Rectangle 42-1.png" alt="">
                            </a>
                            <div class="item__info">
                                Drama<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href=""><h4>Second Chance</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href=""><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <a href="" class="item__link">
                                <img src="img/home/Rectangle 42-1.png" alt="">
                            </a>
                            <div class="item__info">
                                Drama<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href=""><h4>Second Chance</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href=""><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <a href="" class="item__link">
                                <img src="img/home/Rectangle 42-1.png" alt="">
                            </a>
                            <div class="item__info">
                                Drama<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href=""><h4>Second Chance</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href=""><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <a href="" class="item__link">
                                <img src="img/home/Rectangle 42-1.png" alt="">
                            </a>
                            <div class="item__info">
                                Drama<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href=""><h4>Second Chance</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href=""><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <a href="" class="item__link">
                                <img src="img/home/Rectangle 42-1.png" alt="">
                            </a>
                            <div class="item__info">
                                Drama<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href=""><h4>Second Chance</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href=""><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <a href="" class="item__link">
                                <img src="img/home/Rectangle 42-1.png" alt="">
                            </a>
                            <div class="item__info">
                                Drama<span class="info__span">· 1 Month Ago</span>
                            </div>
                            <div class="item__title">
                                <a href=""><h4>Second Chance</h4></a>
                            </div>
                            <div class="item__text">
                                lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas  eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.
                            </div>
                            <div class="item__under under">
                                <div class="under__read">
                                    <span>12 Min Read</span>
                                </div>
                                <div class="under__full">
                                    <a href=""><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="short">
                <div class="short__container _container">
                    <div class="trend__headline">
                        <h3 class="headline__title title">Short Reads</h3>
                        <div class="headline__btns">
                            <button class="headline2__btn-prev"><img src="img/ico/arrow-left.png" alt=""></button>
                            <button class="headline2__btn-next"><img src="img/ico/arrow-right.png" alt=""></button>
                        </div>
                    </div>
                    <div class="short__slider2">
                        <div class="slider2__item2">
                            <div class="item2__describe">
                                <a href="" class="item2__link2">
                                    <img src="img/home/Group 23.png" alt="">
                                </a>
                                <div class="item2__info2">
                                    <div class="item2__title2">
                                        <a href=""><h4>Akame Ga Kill: Season finale</h4></a>
                                    </div>
                                    <div class="item2__text2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider2__item2">
                            <div class="item2__describe">
                                <a href="" class="item2__link2">
                                    <img src="img/home/Group 24.png" alt="">
                                </a>
                                <div class="item2__info2">
                                    <div class="item2__title2">
                                        <a href=""><h4>Naruto Uzumaki: Hidden Village</h4></a>
                                    </div>
                                    <div class="item2__text2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider2__item2">
                            <div class="item2__describe">
                                <a href="" class="item2__link2">
                                    <img src="img/home/Group 25.png" alt="">
                                </a>
                                <div class="item2__info2">
                                    <div class="item2__title2">
                                        <a href=""><h4>Love juice Season Priemere</h4></a>
                                    </div>
                                    <div class="item2__text2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider2__item2">
                            <div class="item2__describe">
                                <a href="" class="item2__link2">
                                    <img src="img/home/Group 23.png" alt="">
                                </a>
                                <div class="item2__info2">
                                    <div class="item2__title2">
                                        <a href=""><h4>Akame Ga Kill: Season finale</h4></a>
                                    </div>
                                    <div class="item2__text2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider2__item2">
                            <div class="item2__describe">
                                <a href="" class="item2__link2">
                                    <img src="img/home/Group 23.png" alt="">
                                </a>
                                <div class="item2__info2">
                                    <div class="item2__title2">
                                        <a href=""><h4>Akame Ga Kill: Season finale</h4></a>
                                    </div>
                                    <div class="item2__text2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider2__item2">
                            <div class="item2__describe">
                                <a href="" class="item2__link2">
                                    <img src="img/home/Group 23.png" alt="">
                                </a>
                                <div class="item2__info2">
                                    <div class="item2__title2">
                                        <a href=""><h4>Akame Ga Kill: Season finale</h4></a>
                                    </div>
                                    <div class="item2__text2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider2__item2">
                            <div class="item2__describe">
                                <a href="" class="item2__link2">
                                    <img src="img/home/Group 23.png" alt="">
                                </a>
                                <div class="item2__info2">
                                    <div class="item2__title2">
                                        <a href=""><h4>Akame Ga Kill: Season finale</h4></a>
                                    </div>
                                    <div class="item2__text2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider2__item2">
                            <div class="item2__describe">
                                <a href="" class="item2__link2">
                                    <img src="img/home/Group 23.png" alt="">
                                </a>
                                <div class="item2__info2">
                                    <div class="item2__title2">
                                        <a href=""><h4>Akame Ga Kill: Season finale</h4></a>
                                    </div>
                                    <div class="item2__text2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blog">
                <div class="blog__container _container">
                    <h3 class="blog__title title">Blog</h3>
                    <div class="blog__categorys">
                        <a href=""><h3 class="categorys__title">comedy</h3></a>
                        <a href=""><h3 class="categorys__title">fantasy</h3></a>
                        <a href=""><h3 class="categorys__title">drama</h3></a>
                        <a href=""><h3 class="categorys__title">action</h3></a>
                        <a href=""><h3 class="categorys__title">history</h3></a>
                        <a href=""><h3 class="categorys__title">military</h3></a>
                    </div>
                    <div class="blog__content">
                        <div class="blog__fantasy">
                            <div class="fantasy__title">Fantasy</div>
                            <div class="fantasy__items">
                                <div class="items__big">
                                    <div class="big__item">
                                        <a href="attack-on-titans.html" class="item__link">
                                            <img src="img/home/Rectangle 42-2.png" alt="">
                                        </a>
                                        <div class="item__info">
                                            <span>1 Month Ago</span>
                                        </div>
                                        <div class="item__title">
                                            <a href="attack-on-titans.html"><h4>Attack On Titans</h4></a>
                                        </div>
                                        <div class="item__text">
                                            lit. Phasellus aliquet nibh id iaculis pharetra. <br> Maecenas  eleifend sed ex. Donec quis magna <br> sed felis elementum blandit nec quis sem. <br> Maecen.
                                        </div>
                                        <div class="item__under under">
                                            <div class="under__full">
                                                <a href="attack-on-titans.html"><span>Load more<img src="img/ico/arrow.png" alt=""></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fantasy__small">
                                    <div class="small__item">
                                        <a href="" class="item2__link2">
                                            <img src="img/home/Group 23.png" alt="">
                                        </a>
                                        <div class="item2__info2">
                                            <div class="item2__title2">
                                                <a href=""><h4>Akame Ga Kill: Season finale</h4></a>
                                            </div>
                                            <div class="item2__text2">
                                                21 march 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small__item">
                                        <a href="" class="item2__link2">
                                            <img src="img/home/Group 24.png" alt="">
                                        </a>
                                        <div class="item2__info2">
                                            <div class="item2__title2">
                                                <a href=""><h4>Naruto Uzumaki: Hidden Village</h4></a>
                                            </div>
                                            <div class="item2__text2">
                                                21 march 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small__item">
                                        <a href="" class="item2__link2">
                                            <img src="img/home/Group 25.png" alt="">
                                        </a>
                                        <div class="item2__info2">
                                            <div class="item2__title2">
                                                <a href=""><h4>Love juice Season Priemere</h4></a>
                                            </div>
                                            <div class="item2__text2">
                                                21 march 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small__item">
                                        <a href="" class="item2__link2">
                                            <img src="img/home/Group 25.png" alt="">
                                        </a>
                                        <div class="item2__info2">
                                            <div class="item2__title2">
                                                <a href=""><h4>Love juice Season Priemere</h4></a>
                                            </div>
                                            <div class="item2__text2">
                                                21 march 2021
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__manga">
                            <div class="manga__title">Manga reads</div>
                            <div class="manga__item2">
                                <a href="" class="item3__link3">
                                    <img src="img/home/akame-small (2).png" alt="">
                                </a>
                                <div class="item3__info3">
                                    <div class="item2__title2">
                                        <a href=""><h4>Akame Ga Kill: Season finale</h4></a>
                                    </div>
                                    <div class="item3__text3">
                                        21 march 2021
                                    </div>
                                </div>
                            </div>
                            <div class="manga__item2">
                                <a href="" class="item3__link3">
                                    <img src="img/home/naruto-small.png" alt="">
                                </a>
                                <div class="item3__info3">
                                    <div class="item2__title2">
                                        <a href=""><h4>Naruto Uzumaki: Hidden Village</h4></a>
                                    </div>
                                    <div class="item3__text3">
                                        21 march 2021
                                    </div>
                                </div>
                            </div>
                            <div class="manga__item2">
                                <a href="" class="item3__link3">
                                    <img src="img/home/love-small.png" alt="">
                                </a>
                                <div class="item3__info3">
                                    <div class="item2__title2">
                                        <a href=""><h4>Love juice Season Priemere</h4></a>
                                    </div>
                                    <div class="item3__text3">
                                        21 march 2021
                                    </div>
                                </div>
                            </div>
                            <div class="manga__item2">
                                <a href="" class="item3__link3">
                                    <img src="img/home/love-small.png" alt="">
                                </a>
                                <div class="item3__info3">
                                    <div class="item2__title2">
                                        <a href=""><h4>Love juice Season Priemere</h4></a>
                                    </div>
                                    <div class="item3__text3">
                                        21 march 2021
                                    </div>
                                </div>
                            </div>
                            <div class="manga__item2">
                                <a href="" class="item3__link3">
                                    <img src="img/home/love-small.png" alt="">
                                </a>
                                <div class="item3__info3">
                                    <div class="item2__title2">
                                        <a href=""><h4>Love juice Season Priemere</h4></a>
                                    </div>
                                    <div class="item3__text3">
                                        21 march 2021
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer__container _container">
                <div class="footer__up">
                    <div class="footer__inf">
                        <a href="home-page.html" class="inf__images"><img src="img/footer/logo-footer.png" alt=""></a>
                        <p class="inf__par">Gates is a blog that focuses on Japanese art and anime. <br> They feature information on Otaku conventions and other <br> anime topics. Hear from famous anime filmmakers and <br> artists as well as plenty of news about the art of cartoon <br> creation in the Japanese culture.</p>
                    </div>
                    <div class="footer__form form">
                        <form action="" method="post" class="js-form" novalidate>
                            <button class="form__button" type="submit">SUBSCRIBE</button>
                            <input type="email" name="email__sub" class="form__input js-input js-input-email" placeholder="Enter your email">
                            <button class="form__ico" type="submit"><img src="img/ico/Group 4.png" alt=""></button> 
                        </form>
                    </div>
                </div>
                <div class="footer__down">
                    <span>@copyright 2021 Gates</span>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="js/formIndex.js"></script>
</html>