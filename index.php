<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header_popup.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/quick_links.css">

    <title>Magic-Chest</title>
</head>

<body>
    <?php require "header.php " ?>

    <div id="main_container">

        <!-- banner's block -->
        <div class="banner-content">
            <div class="banner-catolog">
                <div class="banner-slide" style="display: none;">
                    <a href="https://www.google.ru/">
                        <picture>
                            <source media="(max-width: 767px)" srcset="img/bners/mob_iphone.jpg">
                            <img src="img/bners/big_iphone.jpg" alt="iphone sales">
                        </picture>
                    </a>
                </div>
                <div class="banner-slide" style="display: none;">
                    <a href="https://www.google.ru/">
                        <picture>
                            <source media="(max-width: 767px)" srcset="img\bners\mob_autumn.jpg">
                            <img src="img\bners\big_autumn.jpg" alt="autumn sales">
                        </picture>
                    </a>
                </div>
                <div class="banner-slide" style="display: none;">
                    <a href="https://www.google.ru/">
                        <picture>
                            <source media="(max-width: 767px)" srcset="img\bners\mob_food.jpg">
                            <img src="img\bners\big_food.jpg" alt="food sales">
                        </picture>
                    </a>
                </div>
                <div class="banner-slide" style="display: none;">
                    <a href="https://www.google.ru/">
                        <picture>
                            <source media="(max-width: 767px)" srcset="img\bners\mob_oral.jpg">
                            <img src="img\bners\big_oral.jpg" alt="oral sales">
                        </picture>
                    </a>
                </div>
                <div class="banner-slide" style="display: none;">
                    <a href="https://www.google.ru/">
                        <picture>
                            <source media="(max-width: 767px)" srcset="img\bners\mob_philips.jpg">
                            <img src="img\bners\big_philips.jpg" alt="philips sales">
                        </picture>
                    </a>
                </div>
                <button class="swiper-button prev" onclick="plusSlide(-1)">&#10094;</button>
                <button class="swiper-button next" onclick="plusSlide(1)">&#10095;</button>
            </div>
            <br>
            <ul class="swiper-pagination">
                <li class="swiper-pagination-bullet" onclick="currentSlide(1)"></li>
                <li class="swiper-pagination-bullet" onclick="currentSlide(2)"></li>
                <li class="swiper-pagination-bullet" onclick="currentSlide(3)"></li>
                <li class="swiper-pagination-bullet" onclick="currentSlide(4)"></li>
                <li class="swiper-pagination-bullet" onclick="currentSlide(5)"></li>
            </ul>
        </div>
        <br>

        <!-- quick links -->
        <div class="quick-links-content">
            <div class="links-conteiner">
                <h3>Альбомы</h3>
                <p>Альбомы на липучках - веселые развивашки</p>
                <button>Заказать</button>
            </div>
            <div class="links-conteiner">
                <h3>Прописи</h3>
                <p>Пописи "Пиши, стирай" - первые шаги в письме</p>
                <button>Заказать</button>
            </div>
            <div class="links-conteiner">
                <h3>Карточки</h3>
                <p>Наборы карточек - учись повторяя</p>
                <button>Заказать</button>
            </div>
        </div>

    </div>
    <?php require "footer.php " ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--<script src="js/plagins/jquery.maskedinput.min.js"></script>-->
    <script src="js/burgerScript.js"></script>
    <script src="js/bners.js"></script>
    <script src="js/popup.js"></script>

</body>

</html>